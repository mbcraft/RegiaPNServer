<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Sentinel;
use Mbcraft\Laravel\Models\INameable;

class PlayerNotification extends Model implements IAsUiNotification, INameable
{
    const TYPE_INTERNAL_ERROR = "INTERNAL_ERROR";
    const TYPE_STATE_ERROR = "STATE_ERROR";
    const TYPE_PARAMETERS_ERROR = "PARAMETERS_ERROR";
    const TYPE_INSTANCE_REGISTERED = "INSTANCE_REGISTERED";
    const TYPE_INSTANCE_STARTED = "INSTANCE_STARTED";
    const TYPE_SERVICE_STARTED = "SERVICE_STARTED";
    const TYPE_SERVICE_STOPPED = "SERVICE_STOPPED";
    const TYPE_UPDATE_STARTED = "UPDATE_STARTED";
    const TYPE_UPDATE_COMPLETED = "UPDATE_COMPLETED";
    
    use SoftDeletes;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tab_player_notifications';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['player_id', 'message', 'type', 'ip'];

    protected $dates = ['deleted_at','created_at','updated_at'];

    /**
     * @see INameable::one_entity()
     *
     */
    public static function one_entity() {
        return "player_notification";
    }

    /**
     * @see INameable::many_entities()
     *
     */
    public static function many_entities() {
        return "player_notifications";
    }
    
    /**
     * Ritorna il Player a cui è associata questa notifica.
     * 
     * @return App\Models\Player Il Player della notifica.
     * 
     */
    public function player() {
        return $this->belongsTo('App\Models\Player');
    }

    /**
     * Return this notification in a view-compatible format.
     *
     * @return Notification The notification to view.
     * @throws \Exception
     */
    public function asUiNotification() {
        switch ($this->type) {
            case self::TYPE_INTERNAL_ERROR :return new Notification($this->id,"player",Notification::TYPE_ERROR,lang("player_notifications/form.type.values.".$this->type),$this->message,$this->created_at);
            case self::TYPE_STATE_ERROR :return new Notification($this->id,"player",Notification::TYPE_ERROR,lang("player_notifications/form.type.values.".$this->type),$this->message,$this->created_at);
            case self::TYPE_PARAMETERS_ERROR :return new Notification($this->id,"player",Notification::TYPE_ERROR,lang("player_notifications/form.type.values.".$this->type),$this->message,$this->created_at);
            case self::TYPE_INSTANCE_REGISTERED :return new Notification($this->id,"player",Notification::TYPE_ATTENTION_REQUIRED,lang("player_notifications/form.type.values.".$this->type),$this->message,$this->created_at);
            case self::TYPE_INSTANCE_STARTED :return new Notification($this->id,"player",Notification::TYPE_INFO,lang("player_notifications/form.type.values.".$this->type),$this->message,$this->created_at);
            case self::TYPE_SERVICE_STARTED :return new Notification($this->id,"player",Notification::TYPE_INFO,lang("player_notifications/form.type.values.".$this->type),$this->message,$this->created_at);
            case self::TYPE_SERVICE_STOPPED :return new Notification($this->id,"player",Notification::TYPE_SUCCESS,lang("player_notifications/form.type.values.".$this->type),$this->message,$this->created_at);
            case self::TYPE_UPDATE_STARTED :return new Notification($this->id,"player",Notification::TYPE_INFO,lang("player_notifications/form.type.values.".$this->type),$this->message,$this->created_at);
            case self::TYPE_UPDATE_COMPLETED :return new Notification($this->id,"player",Notification::TYPE_SUCCESS,lang("player_notifications/form.type.values.".$this->type),$this->message,$this->created_at);
            
            
            default : throw new \Exception("PlayerNotification type not supported.");
        }
    }

    /**
     * Returns the last ten notification, in a view-compatible format.
     *
     * @return array The last ten notifications
     */
    static function getLastTenUINotifications()
    {
        $fetched = false;
        if (Sentinel::hasAccess('sys-admin')) {
            $nots = PlayerNotification::where('readed', false)->orderBy('created_at', 'desc')->take(10)->get();
            $total_nots = PlayerNotification::where('readed', false)->count();
            $fetched = true;
        }
        if (!$fetched && (Sentinel::hasAccess('playlist-editor') || Sentinel::hasAccess('manage-customers'))) {
            $nots = PlayerNotification::where('readed', false)->orderBy('tab_player_notifications.created_at', 'desc')
                ->join('tab_players', 'tab_player_notifications.player_id', '=', 'tab_players.id')
                ->join('tab_clienti', 'tab_players.cliente_id', '=', 'tab_clienti.id')->where(function ($query) {
                    $user_id = Sentinel::getUser()->getUserId();
                    $query->where('tab_clienti.owner_id', '=', $user_id)->orWhere('tab_clienti.manager_id', '=', $user_id);
                })->take(10)->get();
            $total_nots = PlayerNotification::where('readed', false)
                ->join('tab_players', 'tab_player_notifications.player_id', '=', 'tab_players.id')
                ->join('tab_clienti', 'tab_players.cliente_id', '=', 'tab_clienti.id')->where(function ($query) {
                    $user_id = Sentinel::getUser()->getUserId();
                    $query->where('tab_clienti.owner_id', '=', $user_id)->orWhere('tab_clienti.manager_id', '=', $user_id);
                })->count();
            $fetched = true;
        }

        $result = [];

        if ($fetched) {
            $list = [];

            foreach ($nots as $not) {
                $list[] = $not->asUiNotification();
            }
            
            $result["list"] = $list;
            $result["real_total_count"] = $total_nots;
        }

        return $result;
    }

}