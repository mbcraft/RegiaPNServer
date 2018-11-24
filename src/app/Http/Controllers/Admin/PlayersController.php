<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Api\v1_0\Modules\ModulesDiffParser;
use Illuminate\Http\Response;
use Mbcraft\Laravel\Http\Controllers\EntityController;
use Mbcraft\Laravel\Http\Controllers\Behaviours\ImportedIndex;
use Mbcraft\Laravel\Http\Controllers\Behaviours\Index;
use Mbcraft\Laravel\Http\Controllers\Behaviours\Create;
use Mbcraft\Laravel\Http\Controllers\Behaviours\Edit;
use Mbcraft\Laravel\Http\Controllers\Behaviours\Delete;
use Mbcraft\Laravel\Http\Controllers\Behaviours\Restore;
use Mbcraft\Laravel\Http\Controllers\Behaviours\Show;
use Mbcraft\Laravel\Http\Controllers\QueryFilters\QueryFilterFactory;
use App\Services\Music\PlayerConfigsGeneratorService;
use App\Services\Music\PlayerUpdatesGeneratorService;

use App\Models\Cliente;
use App\Models\Player;
use App\Models\UpdateDownload;

use Mbcraft\Piol\File;
use Mbcraft\Piol\Dir;
use Sentinel;
use Input;
use View;

use Illuminate\Http\Request;

class PlayersController extends EntityController {

    protected $validationRules = array(
        'cliente_id' => 'required|integer|exists:tab_clienti,id',
        'unique_label' => 'required|min:3|max:64|string|unique:tab_players,unique_label,{id},id,cliente_id,{cliente_id}',
        'registration_code' => 'required|string|min:2|max:16',
        'security_token' => 'required|string|unique:tab_players,security_token,{id}|max:64',
        'playlists_dj_id' => 'integer|exists:SENTINEL_users,id',
        'api_password' => 'required|string|min:8|max:32',
        'indirizzo' => 'min:3|max:255|string',
        'cap' => 'min:3|max:8|string',
        'citta' => 'min:3|max:64|string',
        'provincia' => 'min:3|max:64|string',
        'stato' => 'string|max:2',
        'note' => 'string',
        'time_zone' => 'required|string|max:32',
        'play_start_time' => 'required|string|max:8',
        'play_end_time' => 'required|string|max:8',
        'play_end_time_day_offset' => 'required|integer|min:0|max:4',
        'check_play_minutes_interval' => 'required|integer|min:1|max:20',
        'files_update_time' => 'required|string',
        'loop_playlist' => 'boolean',
        'start_from_beginning' => 'boolean',
        'status' => 'required|in:UNREGISTERED,REGISTERED,ACTIVE,LIMITED,BLOCKED,DELETED',
    );

    const MODEL_CLASS = 'App\Models\Player';
    const VIEW_PREFIX = "admin.";
    const ROUTE_PREFIX = "admin.";

    use ImportedIndex;
    use Create;
    use Index;
    use Edit;
    use Delete;
    use Restore;
    use Show;

    function __construct() {
        $this->conf_generator = new PlayerConfigsGeneratorService();
        $this->update_generator = new PlayerUpdatesGeneratorService();
        $this->LMessage = new \App\Lang\Players\LMessage();
    }

    protected $LMessage;
    private $conf_generator;
    private $update_generator;

    protected function beforeEntityCreate($edit_data) {
        if($edit_data["playlists_dj_id"]=="") {
            $edit_data["playlists_dj_id"] = null;
        }
    }

    protected function beforeEntityEdit($edit_data, $entity) {
        $cliente = Cliente::findOrFail($entity->cliente_id);
        //se la label viene modificata rinomino la cartella del player in upload
        if ($edit_data["unique_label"] != $entity->unique_label) {
            //rinomino la cartella 
            $c_u = new Dir(IServerPaths::CLIENTI_UPLOAD_DIR);
            $c_u_root = $c_u->newDir($cliente->unique_label);
            $c_u_root_p = $c_u_root->newDir($entity->unique_label);
            $c_u_root_p->rename($edit_data["unique_label"]);
        }

        if($edit_data["playlists_dj_id"]=="") {
            $edit_data["playlists_dj_id"] = null;
        }

        return $this->defaultBeforeEntityEdit($edit_data, $entity);
    }

    protected function afterEntityEdit($entity) {

        $player = $entity;
        $player->newUpdateAvailable();
        
        return $this->defaultAfterEntityEdit($entity);
    }

    /**
     * Genera un pacchetto di aggiornamenti scaricabile per un determinato player.
     * 
     * @param type $id
     * @return type
     */
    public function postGenerateUpdatePackage($id) {
        try {

            $player = Player::findOrFail($id);

            $software_vendor = $player->software_vendor;
            $software_name = $player->software_name;
            $software_version = $player->software_version;

            //elimina un eventuale pacchetto di aggiornamenti precedente
            $this->update_generator->clearLastUpdatePackage($id);
            //genera un pacchetto di aggiornamenti scaricabile
            $protected_d = $this->update_generator->generateUpdatePackage(new ModulesDiffParser(),$id,$software_vendor,$software_name,$software_version);

            $absolute_download_link = route("download_player_update", ["playerId" => $id,"updateId" => $protected_d]);
            
            return view('admin.players.update_package_generation')->with('absolute_download_link',$absolute_download_link)->with('success', $this->LMessage->updatePackageGeneration_success());
        } catch (\Exception $ex) {

            \Log::debug($ex->getMessage());

            return $this->getRedirectFor('index')->with('error', $this->LMessage->updatePackageGeneration_failure());
        }
    }

    /**
     * Query utilizzata nella index per visualizzare solo i player in base ai permessi in possesso.
     * 
     * @param type $model_class
     * @param type $filters
     * @return type
     */
    protected function getSummaryCustomQuery($model_class, $filters) {
        if (Sentinel::hasAccess('sys-admin')) {
            return $model_class::query();
        }
        if (Sentinel::hasAccess('playlist-editor') || Sentinel::hasAccess('manage-customers')) {
            return $model_class::whereHas('cliente', function($nested_query) {
                        $user_id = Sentinel::getUser()->getUserId();
                        $nested_query->where('owner_id', $user_id);
                    })->orWhereHas('cliente', function($nested_query) {
                        $user_id = Sentinel::getUser()->getUserId();
                        $nested_query->where('manager_id', $user_id);
                    });
        }
        return $model_class::where('id', -1); //no objects
    }

    /**
     * Action per effettuare il download di un package di aggiornamento per player
     *
     * @param Request $req The request
     * @param int $playerId L'id del player
     * @param string $protectedFolderName Il nome della cartella da cui scaricare l'aggiornamento
     * @return mixed Il download oppure una vista di errore
     */
    public function getUpdatePackage(Request $req, $playerId, $protectedFolderName) {

        \Log::debug("playerId : " . $playerId);
        \Log::debug("updateId : " . $protectedFolderName);

        $update_package_dir = new Dir("/public". PlayerUpdatesGeneratorService::PLAYER_UPDATE_PACKAGE_ROOT_DIR . $playerId . "/" . $protectedFolderName);

        if ($update_package_dir->exists()) {

            $file_list = $update_package_dir->listFiles();

            if (count($file_list) == 1) {
                $update_package_file = $file_list[0];

                $player = Player::findOrFail($playerId);
                $update_download = UpdateDownload::create(["update_id" => $player->last_update_id,"ip" => $req->ip(),"user_agent" => $req->header("User-Agent")]);
                $player->update_downloaded = true;
                $player->save();

                return response()->download($update_package_file->getFullPath());
            } else {
                return View::make("errors/404");
            }
        } else {
            return View::make("errors/404");
        }
    }

    public function getPlaylists($id) {
        $parameters = array(QueryFilterFactory::equal("player_id", $id));

        return $this->getImportedIndex('App\Http\Controllers\Admin\PlaylistsController', $parameters);
    }

    public function getSpots($id) {
        $parameters = array(QueryFilterFactory::equal("player_id", $id));

        return $this->getImportedIndex('App\Http\Controllers\Admin\SpotsController', $parameters);
    }

    public function getPlayerNotifications($id) {
        $parameters = array(QueryFilterFactory::equal("player_id", $id));

        return $this->getImportedIndex('App\Http\Controllers\Admin\PlayerNotificationsController', $parameters);
    }

}
