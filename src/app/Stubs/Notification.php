<?php

namespace App\Stubs {

    class Notification {
        public $type,$title,$message,$icon,$created_at;

        function __construct($type,$title,$message,$icon,$days_passed) {
            $this->type = $type;
            $this->title = $title;
            $this->message = $message;
            $this->icon = $icon;
            $this->created_at = \Carbon\Carbon::create()->subDays($days_passed);
        }

        public static function mocks() {
            $notifications = array();
            $notifications[] = new Notification("info","John Doe","5 members joined today","users",0);
            $notifications[] = new Notification("danger","Tpny","likes a photo of you","user",1);
            $notifications[] = new Notification("info","John","Dont forgot to call...","users",2);
            $notifications[] = new Notification("danger","Jenny Kerry","Very long description here...","info-circle",2);
            $notifications[] = new Notification("success","Ernest Kerry","2 members joined today","thumbs-o-up",3);
            $notifications[] = new Notification("danger","Jenny Kerry","Very long description here...","info-circle",2);
            return $notifications;
        }
    }

}