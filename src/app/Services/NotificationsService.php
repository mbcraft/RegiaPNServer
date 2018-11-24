<?php

namespace App\Services;

use App\Contracts\NotificationsContract;

use App\Models\PlayerNotification;
use App\Models\SystemNotification;

use Sentinel;
/* 
 * This service is used to fetch the notifications for UI display.
 */
class NotificationsService implements NotificationsContract {
    
    function getPlayerNotificationsData() {

        $notifications = PlayerNotification::getLastTenUINotifications();

        $notifications["icon"] = "fa-youtube-play";
        $notifications["view_all"] = array("link" => route("admin.player_notifications.index"),"text" => lang("player_notifications/pages.list"));

        return $notifications;
    }
    
    function getSystemNotificationsData() {

        $notifications  = SystemNotification::getLastTenUINotifications();
        
        $notifications["icon"] = "fa-tasks";
        $notifications["view_all"] = array("link" => route("admin.system_notifications.index"),"text" => lang("system_notifications/pages.list"));

        return $notifications;
    }
}
