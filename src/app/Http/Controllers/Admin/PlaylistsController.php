<?php

namespace App\Http\Controllers\Admin;

use Mbcraft\Laravel\Http\Controllers\EntityController;

use Mbcraft\Laravel\Http\Controllers\Behaviours\Index;
use Mbcraft\Laravel\Http\Controllers\Behaviours\Edit;
use Mbcraft\Laravel\Http\Controllers\Behaviours\Show;
use Mbcraft\Laravel\Http\Controllers\Behaviours\Create;
use Mbcraft\Laravel\Http\Controllers\Behaviours\Delete;

use App\Models\Player;
use App\Models\Playlist;
use App\Models\ElemPlaylist;

use App\Services\Music\PlayerConfigsGeneratorService;

use Input;
use Sentinel;

class PlaylistsController extends EntityController {
    
    const MODEL_CLASS = 'App\Models\Playlist';
    const VIEW_PREFIX = "admin.";
    const ROUTE_PREFIX = "admin.";
    
    protected $validationRules = array(
        'player_id' => 'required|integer|exists:tab_players,id',
        'titolo' => 'required|string|min:2',
        'stato' => 'required|in:NOT_ACTIVE_OLD,NOT_ACTIVE,WORK_IN_PROGRESS,ACTIVE',
        'note' => 'string'
    );

    private $conf_generator;
    
    function __construct() {
        $this->conf_generator = new PlayerConfigsGeneratorService();
        $this->LMessage = new \App\Lang\Playlists\LMessage();
    }
    
    /**
     * Mantiene abilitata un'unica playlist disabilitando tutte le altre se stato=='ACTIVE'
     * 
     * @param array $p_edit_data Dati in ingresso
     * @param array $entity L'oggetto che subira' le modifiche
     * @return mixed result e dati in uscita (eventualmente) modificati
     */
    protected function beforeEntityEdit($p_edit_data,$entity) {

        //se viene impostata come attiva, metto tutte le altre come 'non attive'
        if ($p_edit_data["stato"]=='ACTIVE' && $entity->stato!='ACTIVE') {
            \Log::debug("New ACTIVE playlist detected ...");
            $active_playlists = Playlist::where('stato','ACTIVE')->where('player_id',$entity->player_id)->get();
            foreach ($active_playlists as $pl) {
                $pl->stato = 'NOT_ACTIVE';
                $pl->save();
            }
        }

        //cancello tutti i vecchi elementi
        $old_elems = ElemPlaylist::where('playlist_id',$entity->id)->get();
        foreach ($old_elems as $el) {
            $el->delete();
        }
        
        //salvo tutti gli elementi della playlist
        $this->updatePlaylistElements($entity);
        
        //la playlist attiva è stata modificata : rigenero i file della playlist per il player
        if ($entity->stato=='ACTIVE') {
            $player = Player::findOrFail($entity->player_id);
            $player->newUpdateAvailable();
        }
        
        return $this->defaultBeforeEntityEdit($p_edit_data, $entity);
    }
    
    private function updatePlaylistElements($entity) {
        $playlist_id = $entity->id;
        $playlist_element_count = Input::get("playlist_element_count");
        for ($i=1;$i<=$playlist_element_count;$i++) {
            $elem = Input::get("playlist_element_".$i);
            $parts = explode("|", $elem);
            ElemPlaylist::create([
                'playlist_id' => $playlist_id,
                'playable_id' => $parts[1],
                'playable_type' => $parts[0] == 'song' ? 'App\Models\Song' : 'App\Models\Spot',
                'ordine' => $i
                ]);
        }
    }
    
    protected function beforeEntityCreate($create_data) {
        if ($create_data["stato"]!="WORK_IN_PROGRESS")
            throw new \Exception("Lo stato della playlist non è 'WORK_IN_PROGRESS' !!");
        return $this->defaultBeforeEntityCreate($create_data);
    }
    
    protected function afterEntityCreate($entity) {
        $this->updatePlaylistElements($entity);
        
        return $this->defaultAfterEntityCreate($entity);
    }
    
    /*
    protected function getSupportedModelFilters() {
        return array("player_id");
    }
    */
    
    protected function getSummaryCustomQuery($model_class,$filters) {
        if (Sentinel::hasAccess('playlist-editor')) {
            //\Log::debug("As playlist-editor");
            return $model_class::whereHas('player',function($query){
                $query->whereHas('cliente',function($nested_query){
                    $user_id = Sentinel::getUser()->getUserId();
                    $nested_query->where('owner_id',$user_id);
                });
            })->orWhereHas('player',function($query){
                $query->whereHas('cliente',function($nested_query){
                    $user_id = Sentinel::getUser()->getUserId();
                    $nested_query->where('manager_id',$user_id);
                });
            });
        }
        return $model_class::where('id',-1);
    }
    
    use Index;
    use Edit;
    use Show;
    use Create;
    use Delete;
}