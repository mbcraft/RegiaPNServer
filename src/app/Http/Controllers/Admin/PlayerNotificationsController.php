<?php

namespace App\Http\Controllers\Admin;

use Mbcraft\Laravel\Http\Controllers\EntityController;
use Mbcraft\Laravel\Http\Controllers\Behaviours\Index;
use Mbcraft\Laravel\Http\Controllers\Behaviours\Show;
use Mbcraft\Laravel\Http\Controllers\Behaviours\Delete;

use App\Models\PlayerNotification;
use App\Models\SystemNotification;
use App\Models\Player;
use App\Services\Music\IServerPaths;

use App\Services\Music\PlayerConfigsGeneratorService;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Mbcraft\Laravel\Http\HttpError;

use Mbcraft\Piol\Dir;

use Input;
use Response;


class PlayerNotificationsController extends EntityController {
    
    //token di sicurezza
    const NOTIFICATION_SECURITY_TOKEN_KEY = "security_token";
    //registration_code, used for player instance registration
    const NOTIFICATION_REGISTRATION_CODE_KEY = "registration_code";
    //cliente_id, player_id : used for player identification
    const NOTIFICATION_CLIENTE_ID_KEY = "cliente_id";
    const NOTIFICATION_PLAYER_ID_KEY = "player_id";
    //message : message sent from the player
    const NOTIFICATION_MESSAGE_KEY = "message";
    
    const MODEL_CLASS = 'App\Models\PlayerNotification';
    const VIEW_PREFIX = "admin.";
    const ROUTE_PREFIX = "admin.";

    use Index;
    use Show;
    use Delete;
    use NotificationReadedTrait;


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
    public function postRegisterInstance() {

        \Log::debug("Registering new player instance ...");

        $pgen = new PlayerConfigsGeneratorService();

        $code = Input::get(self::NOTIFICATION_REGISTRATION_CODE_KEY);
        
        if (Player::hasRegistrationCode($code)) {

            $player = Player::getByRegistrationCode($code);

            $player->status = "ACTIVE";
            
            $player->save();
           
            $pn = PlayerNotification::create([
                        "player_id" => $player->id,
                        "message" => "Player Instance Registered : A new player has been registered.",
                        "type" => "INSTANCE_REGISTERED",
                        "ip" => "1.2.3.4"
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
    public function postError() {

        $type = "PLAYER_ERROR";

        $cliente_id = Input::get(self::NOTIFICATION_CLIENTE_ID_KEY);
        $player_id = Input::get(self::NOTIFICATION_PLAYER_ID_KEY);
        $message = Input::get(self::NOTIFICATION_MESSAGE_KEY);

        //controllo se ci sono errori nei parametri, ma in ogni caso loggo l'errore.
        $this->checkParameters($cliente_id, $player_id, $type);

        $pn = PlayerNotification::create([
                    "player_id" => $player_id,
                    "message" => "Player Error : " . $message,
                    "type" => $type,
                    "ip" => $req->ip()
        ]);
        
        return Response::make("OK", '200')->header('Content-Type', 'text/plain'); 
    }

    private function checkParameters($cliente_id, $player_id, $security_token, $notification_type) {
        $p = null;
        try {
            $p = Player::where("cliente_id",$cliente_id)->where("id",$player_id)->where("security_token",$security_token)->firstOrFail();
        } catch (ModelNotFoundException $ex) {
            $pn = PlayerNotification::create([
                        "message" => "Player with id " . $player_id . " not found (" . $notification_type . ").",
                        "type" => "PARAMETERS_ERROR",
                        "ip" => "1.2.3.4"
            ]);

            return false;
        }

        if (!($p->status == 'ACTIVE' || $p->status == 'LIMITED')) {
            $pn = PlayerNotification::create([
                        "message" => "A player in " . $p->status . " has send a notification : " . $notification_type . " .",
                        "type" => "STATE_ERROR",
                        "ip" => "1.2.3.4"
            ]);

            return false;
        }

        return true;
    }

    /**
     * Called remotely to notify that a player has been started.
     * 
     */
    public function postInstanceStarted() {
        
        \Log::debug("Instance started called!!");
        
        $type = "INSTANCE_STARTED";

        $security_token = Input::get(self::NOTIFICATION_SECURITY_TOKEN_KEY);
        $cliente_id = Input::get(self::NOTIFICATION_CLIENTE_ID_KEY);
        $player_id = Input::get(self::NOTIFICATION_PLAYER_ID_KEY);
        //$message = Input::get(self::NOTIFICATION_MESSAGE_KEY);

        if ($this->checkParameters($cliente_id, $player_id, $security_token, $type)) {

            $pn = PlayerNotification::create([
                        "player_id" => $player_id,
                        "message" => "Player Instance Started ! ",
                        "type" => $type,
                        "ip" => "1.2.3.4"
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
    public function postMediaPlayerStarted() {
        $type = "MEDIA_PLAYER_STARTED";

        $cliente_id = Input::get(self::NOTIFICATION_CLIENTE_ID_KEY);
        $player_id = Input::get(self::NOTIFICATION_PLAYER_ID_KEY);
        $message = Input::get(self::NOTIFICATION_MESSAGE_KEY);

        if ($this->checkParameters($cliente_id, $player_id, $type)) {

            $pn = PlayerNotification::create([
                        "player_id" => $player_id,
                        "message" => "Media Player Started : " . $message,
                        "type" => $type,
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
    public function postMediaPlayerStopped() {

        $type = "MEDIA_PLAYER_STOPPED";

        $cliente_id = Input::get(self::NOTIFICATION_CLIENTE_ID_KEY);
        $player_id = Input::get(self::NOTIFICATION_PLAYER_ID_KEY);
        $message = Input::get(self::NOTIFICATION_MESSAGE_KEY);

        if ($this->checkParameters($cliente_id, $player_id, $type)) {

            $pn = PlayerNotification::create([
                        "player_id" => $player_id,
                        "message" => "Media Player Stopped : " . $message,
                        "type" => $type,
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
    public function postUpdateStarted() {

        $type = "UPDATE_STARTED";

        $cliente_id = Input::get(self::NOTIFICATION_CLIENTE_ID_KEY);
        $player_id = Input::get(self::NOTIFICATION_PLAYER_ID_KEY);
        $message = Input::get(self::NOTIFICATION_MESSAGE_KEY);

        if ($this->checkParameters($cliente_id, $player_id, $type)) {

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
    public function postUpdateCompleted() {

        $type = "UPDATE_COMPLETED";

        $cliente_id = Input::get(self::NOTIFICATION_CLIENTE_ID_KEY);
        $player_id = Input::get(self::NOTIFICATION_PLAYER_ID_KEY);
        $message = Input::get(self::NOTIFICATION_MESSAGE_KEY);

        if ($this->checkParameters($cliente_id, $player_id, $type)) {

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
