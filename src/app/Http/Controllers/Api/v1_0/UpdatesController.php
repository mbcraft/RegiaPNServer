<?php

namespace App\Http\Controllers\Api\v1_0;

use App\Http\Controllers\Api\v1_0\Modules\ModulesDiffParser;
use App\Models\PlayerNotification;
use App\Models\Player;
use App\Models\Update;
use App\Models\UpdateDownload;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use App\Services\Music\PlayerUpdatesGeneratorService;

use Mbcraft\Piol\Dir;

use Illuminate\Http\Request;

use Response;

class UpdatesController extends ApiController {
    
    private function checkParameters($cliente_id, $player_id, $player_security_token, $update_type, $req) {
        $p = null;
        try {
            $p = Player::where("id",$player_id)->where("cliente_id",$cliente_id)->where("security_token",$player_security_token)->firstOrFail();
        } catch (ModelNotFoundException $ex) {
            $pn = PlayerNotification::create([
                        "player_id" => $player_id,
                        "message" => "Instance with id " . $player_id . ", cliente_id ".$cliente_id.", security_token ".$player_security_token." not found (" . $update_type . ").",
                        "type" => "PARAMETERS_ERROR",
                        "ip" => $req->ip()
            ]);

            return false;
        }

        if (!($p->status == 'ACTIVE' || $p->status == 'LIMITED')) {
            $pn = PlayerNotification::create([
                        "player_id" => $player_id,
                        "message" => "An instance in " . $p->status . " has send an update command : " . $update_type . " .",
                        "type" => "STATE_ERROR",
                        "ip" => $req->ip()
            ]);

            return false;
        }

        return true;
    }

    /**
     * Checks if a new update is available.
     * Can return :
     *      NEW UPDATE AVAILABLE
     *      NO UPDATES YET
     *      ERROR : .... message ...
     * @param Request $req
     */
    public function getCheckForUpdates(Request $req) {
        $type = "CHECK_FOR_UPDATES";

        $player_security_token = $req->get(self::API_PLAYER_SECURITY_TOKEN_KEY);
        $cliente_id = $req->get(self::API_CLIENTE_ID_KEY);
        $player_id = $req->get(self::API_PLAYER_ID_KEY);
        $update_id = $req->get(self::API_UPDATE_ID_KEY);

        $software_vendor = $req->get(self::API_SOFTWARE_VENDOR_KEY);
        $software_name = $req->get(self::API_SOFTWARE_NAME_KEY);
        $software_version = $req->get(self::API_SOFTWARE_VERSION_KEY);



        if ($this->checkParameters($cliente_id,$player_id,$player_security_token,$type,$req)) {

            $player = Player::findOrFail($player_id);

            //check if a newer update is available
            $last_update_null = $player->last_update_id==null;
            $new_update_available = ($player->last_update_id > $update_id && !$player->update_downloaded);
            $software_updated = $player->hasSoftwareUpdateAvailable();

            if ($last_update_null || $new_update_available || $software_updated)
                return Response::make(self::UPDATE_CHECK_RESPONSE_NEW_UPDATE_AVAILABLE, '200')->header('Content-Type', 'text/plain');
            else
                return Response::make(self::UPDATE_CHECK_RESPONSE_NO_UPDATES_YET, '200')->header('Content-Type', 'text/plain');
        } else {
            return Response::make(self::UPDATE_CHECK_RESPONSE_ERROR_PREFIX."Invalid parameters : cliente_id = ".$cliente_id." player_id = ".$player_id." player_security_token = ".$player_security_token, '200')->header('Content-Type', 'text/plain');
        }
    }
    
    /**
     * Called remotely to notify that an update package must be prepared.
     * 
     * @param \Illuminate\Http\Request $req
     */
    public function postUpdateRequest(Request $req) {
        
        $type = "UPDATE_REQUEST";
        
        $player_security_token = $req->get(self::API_PLAYER_SECURITY_TOKEN_KEY);
        $cliente_id = $req->get(self::API_CLIENTE_ID_KEY);
        $player_id = $req->get(self::API_PLAYER_ID_KEY);

        $software_vendor = $req->get(self::API_SOFTWARE_VENDOR_KEY);
        $software_name = $req->get(self::API_SOFTWARE_NAME_KEY);
        $software_version = $req->get(self::API_SOFTWARE_VERSION_KEY);
        
        if ($this->checkParameters($cliente_id, $player_id, $player_security_token, $type, $req)) {

            $modules_diff_parser = new ModulesDiffParser();
            $modules_diff_parser->parse($req);

            $update_generator = new PlayerUpdatesGeneratorService();

            $update_generator->generateUpdatePackage($modules_diff_parser,$player_id,$software_vendor,$software_name,$software_version);


            $player = Player::findOrFail($player_id);

            if ($player->update_downloaded) {
                $update = Update::create(["player_id" => $player_id]);
                $player->last_update_id = $update->id;
                $player->update_downloaded = false;
                $player->save();
            }
            
            return Response::make("OK", '200')->header('Content-Type', 'text/plain'); 
        } else {
            return Response::make("FORBIDDEN", '404')->header('Content-Type', 'text/plain'); 
        }

    }

    /**
     * Called remotely to download the update package for the player.
     * Post is used since tracking data is collected and some state is changed.
     * 
     * @param \Illuminate\Http\Request $req
     */
    public function postUpdateDownload(Request $req) {
        
        $type = "UPDATE_DOWNLOAD";
        
        $player_security_token = $req->get(self::API_PLAYER_SECURITY_TOKEN_KEY);
        $cliente_id = $req->get(self::API_CLIENTE_ID_KEY);
        $player_id = $req->get(self::API_PLAYER_ID_KEY);
        
        if ($this->checkParameters($cliente_id, $player_id, $player_security_token, $type, $req)) {

            $player_update_dir = new Dir(PlayerUpdatesGeneratorService::PLAYER_UPDATE_PACKAGE_ROOT_DIR.$player_id);
            $package_update_dir = $player_update_dir->getUniqueSubdir();

            if ($package_update_dir->exists()) {
                $update_package = $package_update_dir->getUniqueFile();

                if ($update_package->exists()) {
                    $player = Player::findOrFail($player_id);
                    UpdateDownload::create(["update_id" => $player->last_update_id,"ip" => $req->ip(),"user_agent" => $req->header("User-Agent")]);
                    $player->update_downloaded = true;
                    $player->save();

                    return response()->download($update_package->getFullPath());
                }
            }
        } else {
            return Response::make("FORBIDDEN", '404')->header('Content-Type', 'text/plain');
        }
    }
}