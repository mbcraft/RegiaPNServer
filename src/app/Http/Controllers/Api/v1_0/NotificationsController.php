<?php

namespace App\Http\Controllers\Api\v1_0;

use App\Http\Controllers\Controller;

use App\Models\PlayerNotification;
use App\Models\SystemNotification;
use App\Models\Player;
use App\Services\Music\IServerPaths;
use App\Services\Music\PlayerConfigsGeneratorService;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use Mbcraft\Piol\Dir;

use Illuminate\Http\Request;

use Response;
use Mbcraft\Laravel\Http\HttpError;


class NotificationsController extends ApiController {
    

    
    //class of the model used
    const MODEL_CLASS = 'App\Models\PlayerNotification';

    function __construct() {
        $this->LMessage = new \App\Lang\LMessage();
    }

    protected $LMessage;

    /*
    protected function getSupportedModelFilters() {
        return array("player_id");
    }
    */
    
    /**
     * Called remotely to register a new player.
     * 
     * @param \App\Http\Requests\RegisterInstanceRequest $req
     * @param \App\Http\Controllers\Admin\PlayerConfigsGeneratorService $gen
     * @return string Il global.xml per il player appena registrato.
     */
    public function postRegisterInstance(Request $req) {

        \Log::debug("Registering new player instance ...");

        $pgen = new PlayerConfigsGeneratorService();

        $code = $req->get(self::API_REGISTRATION_CODE_KEY);
        
        $software_name = $req->get(self::API_SOFTWARE_NAME_KEY);
        $software_version = $req->get(self::API_SOFTWARE_VERSION_KEY);
        $software_vendor = $req->get(self::API_SOFTWARE_VENDOR_KEY);
        
        
        if (Player::hasRegistrationCode($code)) {

            $player = Player::getByRegistrationCode($code);

            $player->status = "ACTIVE";
            
            $player->software_name = $software_name;
            $player->software_version = $software_version;
            $player->software_vendor = $software_vendor;
            
            $player->save();
           
            $pn = PlayerNotification::create([
                        "player_id" => $player->id,
                        "message" => "Player Instance Registered : A new player has been registered.",
                        "type" => "INSTANCE_REGISTERED",
                        "ip" => $req->ip()
            ]);
            
            \Log::debug("Generating global.xml data ...");
            //devo ritornare il global.xml
            $global_xml = $pgen->getPlayerGlobalConfigFile($player->id);

            \Log::debug("Returning global.xml data ...");
            
            return Response::make($global_xml, '200')->header('Content-Type', 'text/xml'); 
        } else {
            $sn = SystemNotification::create([
                        "message" => "Player Registation Error : Invalid registration code [" . $code . "].",
                        "type" => "ERROR"
            ]);
            // DEVE RITORNARE ERRORE HTTP !!!
            return HttpError::forbidden("The registration code is not valid.");
        }
    }

    /**
     * Creo le cartelle relative al player dopo che viene registrato
     * 
     * @param App\Models\Player $player Il player appena registrato
     */
    private function createPlayerFolders($cliente,$player) {
        
        //download, cliente
        $d_c = new Dir(IServerPaths::CLIENTI_DOWNLOAD_DIR . "/" . $cliente->id);
        $d_c->touch();
        //download, player
        $d_c_p = $d_c->newDir($player->id);
        $d_c_p->touch();
        //download configurazione
        $d_c_p_config = $d_c_p->newDir("config");
        $d_c_p_config->touch();
        //download spot crittati
        $d_c_p_crypted_spot = $d_c_p->newDir("crypted_spot");
        $d_c_p_crypted_spot->touch();
        //upload del cliente
        $u_c = new Dir(IServerPaths::CLIENTI_UPLOAD_DIR . "/" . $cliente->unique_label);
        $u_c->touch();
        //upload per il player
        $u_c_p = $u_c->newDir($player->unique_label);
        $u_c_p->touch();
        //spot in upload
        $u_c_p_spot = $u_c_p->newDir("spot");
        $u_c_p_spot->touch();
    }

    /**
     * Called remotely to notify an error.
     * 
     * @param \App\Http\Requests\PlayerNotificationRequest $req
     */
    public function postError(Request $req) {

        $type = "INTERNAL_ERROR";

        $player_security_token = $req->get(self::API_PLAYER_SECURITY_TOKEN_KEY);
        $cliente_id = $req->get(self::API_CLIENTE_ID_KEY);
        $player_id = $req->get(self::API_PLAYER_ID_KEY);
        $message = $req->get(self::API_MESSAGE_KEY);

        //controllo se ci sono errori nei parametri, ma in ogni caso loggo l'errore.
        $this->checkParameters($cliente_id, $player_id, $player_security_token, $type, $req);

        $pn = PlayerNotification::create([
                    "player_id" => $player_id,
                    "message" => "Instance Error : " . $message,
                    "type" => $type,
                    "ip" => $req->ip()
        ]);
        
        return Response::make("OK", '200')->header('Content-Type', 'text/plain'); 
    }

    private function checkParameters($cliente_id, $player_id, $player_security_token, $notification_type, $req) {
        $p = null;
        try {
            $p = Player::where("id",$player_id)->where("cliente_id",$cliente_id)->where("security_token",$player_security_token)->firstOrFail();
        } catch (ModelNotFoundException $ex) {
            \Log::debug("Player not found : cliente_id=".$cliente_id." player_id=".$player_id." player_security_token=".$player_security_token);
            $pn = PlayerNotification::create([
                        "player_id" => $player_id,
                        "message" => "Instance with id " . $player_id . ", cliente_id ".$cliente_id.", security_token ".$player_security_token." not found (" . $notification_type . ").",
                        "type" => "PARAMETERS_ERROR",
                        "ip" => $req->ip()
            ]);

            return false;
        }

        if (!($p->status == 'ACTIVE' || $p->status == 'LIMITED')) {
            $pn = PlayerNotification::create([
                        "player_id" => $player_id,
                        "message" => "An instance in " . $p->status . " has send a notification : " . $notification_type . " .",
                        "type" => "STATE_ERROR",
                        "ip" => $req->ip()
            ]);

            return false;
        }

        return true;
    }

    /**
     * Called remotely to notify that a player has been started.
     * 
     */
    public function postInstanceStarted(Request $req) {
        
        \Log::debug("Instance started called!!");
        
        $type = "INSTANCE_STARTED";

        $player_security_token = $req->get(self::API_PLAYER_SECURITY_TOKEN_KEY);
        $cliente_id = $req->get(self::API_CLIENTE_ID_KEY);
        $player_id = $req->get(self::API_PLAYER_ID_KEY);

        if ($this->checkParameters($cliente_id, $player_id, $player_security_token, $type, $req)) {

            $software_name = $req->get(self::API_SOFTWARE_NAME_KEY);
            $software_version = $req->get(self::API_SOFTWARE_VERSION_KEY);
            $software_vendor = $req->get(self::API_SOFTWARE_VENDOR_KEY);

            $player = Player::findOrFail($player_id);

            $software_vendor_changes = "";
            if ($player->software_vendor!=$software_vendor) {
                $software_vendor_changes = "{".$player->software_vendor." -> ".$software_vendor."}";
                $player->software_vendor=$software_vendor;
            }

            $software_name_changes = "";
            if ($player->software_name!=$software_name) {
                $software_name_changes = "(".$player->software_name." -> ".$software_name.") ";
                $player->software_name=$software_name;
            }

            $software_version_changes = "";
            if ($player->software_version!=$software_version) {
                $software_version_changes = "[".$player->software_version." -> ".$software_version."] ";
                $player->software_version=$software_version;
            }

            $player->save();

            $pn = PlayerNotification::create([
                        "player_id" => $player_id,
                        "message" => "Player Instance Started! ".$software_name_changes.$software_version_changes.$software_vendor_changes,
                        "type" => $type,
                        "ip" => $req->ip()
            ]);
            
            return Response::make("OK", 200)->header('Content-Type', 'text/plain'); 
        } else {
            return Response::make("PARAMETERS ERROR",500);
        }
        
        
    }

    /**
     * Called remotely to notify that the media player has been started.
     * 
     * @param \App\Http\Requests\PlayerNotificationRequest $req
     */
    public function postServiceStarted(Request $req) {
        
        $type = "SERVICE_STARTED";

        $player_security_token = $req->get(self::API_PLAYER_SECURITY_TOKEN_KEY);
        $cliente_id = $req->get(self::API_CLIENTE_ID_KEY);
        $player_id = $req->get(self::API_PLAYER_ID_KEY);
        $message = $req->get(self::API_MESSAGE_KEY);
        $specification = $req->get(self::API_SPECIFICATION_KEY);

        if ($this->checkParameters($cliente_id, $player_id, $player_security_token, $type, $req)) {

            $pn = PlayerNotification::create([
                        "player_id" => $player_id,
                        "message" => "Service Started : " . $message,
                        "type" => $type,
                        "specification" => $specification,
                        "ip" => $req->ip()
            ]);
        }
        
        return Response::make("OK", '200')->header('Content-Type', 'text/plain'); 
    }

    /**
     * Called remotely to notify that the media player has been stopped.
     * 
     * @param \App\Http\Requests\PlayerNotificationRequest $req
     */
    public function postServiceStopped(Request $req) {

        $type = "SERVICE_STOPPED";

        $player_security_token = $req->get(self::API_PLAYER_SECURITY_TOKEN_KEY);
        $cliente_id = $req->get(self::API_CLIENTE_ID_KEY);
        $player_id = $req->get(self::API_PLAYER_ID_KEY);
        $message = $req->get(self::API_MESSAGE_KEY);
        $specification = $req->get(self::API_SPECIFICATION_KEY);

        if ($this->checkParameters($cliente_id, $player_id, $player_security_token, $type, $req)) {

            $pn = PlayerNotification::create([
                        "player_id" => $player_id,
                        "message" => "Service Stopped : " . $message,
                        "type" => $type,
                        "specification" => $specification,
                        "ip" => $req->ip()
            ]);
        }
        
        return Response::make("OK", '200')->header('Content-Type', 'text/plain'); 
    }
    
    /**
     * Called remotely to notify that an update is going to be done.
     * 
     * @param \App\Http\Requests\PlayerNotificationRequest $req
     */
    public function postUpdateStarted(Request $req) {

        $type = "UPDATE_STARTED";

        $player_security_token = $req->get(self::API_PLAYER_SECURITY_TOKEN_KEY);
        $cliente_id = $req->get(self::API_CLIENTE_ID_KEY);
        $player_id = $req->get(self::API_PLAYER_ID_KEY);
        $message = $req->get(self::API_MESSAGE_KEY);

        if ($this->checkParameters($cliente_id, $player_id, $player_security_token, $type, $req)) {

            $pn = PlayerNotification::create([
                        "player_id" => $player_id,
                        "message" => "Player Update Started : " . $message,
                        "type" => $type,
                        "ip" => $req->ip()
            ]);
        }
        
        return Response::make("OK", '200')->header('Content-Type', 'text/plain'); 
    }

    /**
     * Called remotely to notify that an update has been completed.
     * 
     * @param \App\Http\Requests\PlayerNotificationRequest $req
     */
    public function postUpdateCompleted(Request $req) {

        $type = "UPDATE_COMPLETED";

        $player_security_token = $req->get(self::API_PLAYER_SECURITY_TOKEN_KEY);
        $cliente_id = $req->get(self::API_CLIENTE_ID_KEY);
        $player_id = $req->get(self::API_PLAYER_ID_KEY);
        $message = $req->get(self::API_MESSAGE_KEY);

        if ($this->checkParameters($cliente_id, $player_id, $player_security_token, $type, $req)) {

            $pn = PlayerNotification::create([
                        "player_id" => $player_id,
                        "message" => "Player Update Completed : " . $message,
                        "type" => $type,
                        "ip" => $req->ip()
            ]);
        }
        
        return Response::make("OK", '200')->header('Content-Type', 'text/plain'); 
    }

}
