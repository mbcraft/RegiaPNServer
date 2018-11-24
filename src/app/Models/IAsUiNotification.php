<?php

namespace App\Models;

/* 
 * Interface used to translate a notification to a common format.
 */
interface IAsUiNotification {
    
    /**
     * Returns a App\Models\Notification instance to be used for
     * showing in the UI.
     */
    public function asUiNotification();

    /**
     * Returns the last ten notification, in view-compatible objects.
     *
     * @return array The last ten notifications.
     */
    public static function getLastTenUINotifications();
    
}
