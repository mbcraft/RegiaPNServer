<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Sentinel;
use Illuminate\Database\Eloquent\Model;
use Mbcraft\Laravel\Models\INameable;

class SystemNotification extends Model implements IAsUiNotification, INameable
{
    const TYPE_INFO = "INFO";
    const TYPE_WARNING = "WARNING";
    const TYPE_ERROR = "ERROR";
    const TYPE_DEBUG = "DEBUG";
    
    use SoftDeletes;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tab_system_notifications';

    protected $fillable = ['message', 'type'];

    protected $dates = ['deleted_at','created_at','updated_at'];

    /**
     * @see INameable::one_entity()
     *
     */
    public static function one_entity() {
        return "system_notification";
    }

    /**
     * @see INameable::many_entities()
     *
     */
    public static function many_entities() {
        return "system_notifications";
    }


    /**
     * Returns a view-compatible Notification object representing this notification
     *
     * @return Notification The notification to be shown
     * @throws \Exception If the notification type is unknown
     */
    public function asUiNotification() {
        switch ($this->type) {
            case self::TYPE_INFO: return new Notification($this->id,"system",Notification::TYPE_SUCCESS,lang("system_notifications/form.type.values.".$this->type),$this->message,$this->created_at);
            case self::TYPE_WARNING: return new Notification($this->id,"system",Notification::TYPE_WARNING,lang("system_notifications/form.type.values.".$this->type),$this->message,$this->created_at);
            case self::TYPE_ERROR: return new Notification($this->id,"system",Notification::TYPE_ERROR,lang("system_notifications/form.type.values.".$this->type),$this->message,$this->created_at);
            case self::TYPE_DEBUG: return new Notification($this->id,"system",Notification::TYPE_INFO,lang("system_notifications/form.type.values.".$this->type),$this->message,$this->created_at);
            default : throw new \Exception("System notification type not supported : ".$this->type);
        }
        
    }

    /**
     * Returns the last ten Notification-s, in a format compatible with the view.
     *
     * @return array The last ten notifications
     */
    static function getLastTenUINotifications() {

        $result = [];

        if (Sentinel::hasAccess('sys-admin')) {
            $nots = SystemNotification::take(10)->where('readed', false)->orderBy('created_at', 'desc')->get();
            $total_nots = SystemNotification::where('readed', false)->count();
            
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
