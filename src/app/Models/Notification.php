<?php

namespace App\Models;

class Notification {
    
    //types
    const TYPE_SUCCESS = "ok";
    const TYPE_INFO = "info";
    const TYPE_WARNING = "warning";
    const TYPE_DANGER = "danger";
    const TYPE_ERROR = "error";
    const TYPE_FAILURE = "failure";
    const TYPE_COMMENT = "comment";
    const TYPE_MESSAGE = "message";
    const TYPE_ATTENTION_REQUIRED = "attention";
    
    //colors
    const COLOR_PRIMARY = "primary";
    const COLOR_SUCCESS = "success";
    const COLOR_WARNING = "warning";
    const COLOR_ERROR = "danger";
    const COLOR_YELLOW = "yellow";
    
    //icons
    const ICON_WARNING = "fa-warning";  //
    const ICON_INFO = "fa-info-circle"; //
    const ICON_DANGER = "fa-danger"; //
    const ICON_EXCLAMATION = "fa-exclamation-circle"; //
    const ICON_FAILURE = "fa-times-circle"; 
    const ICON_OK = "fa-check-circle"; //
    const ICON_THUNDER = "fa-flash"; //
    const ICON_COMMENT = "fa-comment"; //
    const ICON_MAIL = "fa-envelope-o"; //
    
    private $id,$category,$type,$title,$message,$created_at;
    private $color,$icon;
   
    private function setupIconAndColor($icon,$color) {
        $this->icon = $icon;
        $this->color = $color;
    }

    /**
     * Setup this Notification object from the notification type
     *
     * @param $type the notification type
     * @throws \Exception if something goes wrong
     */
    private function loadIconAndColorFromType($type) {
        switch($type) {
            case self::TYPE_SUCCESS:$this->setupIconAndColor(self::ICON_OK, self::COLOR_SUCCESS);break;
            case self::TYPE_INFO:$this->setupIconAndColor(self::ICON_INFO, self::COLOR_PRIMARY);break;
            case self::TYPE_WARNING:$this->setupIconAndColor(self::ICON_WARNING, self::COLOR_WARNING);break;
            case self::TYPE_DANGER:$this->setupIconAndColor(self::ICON_DANGER, self::COLOR_WARNING);break;
            case self::TYPE_ERROR:$this->setupIconAndColor(self::ICON_EXCLAMATION, self::COLOR_ERROR);break;
            case self::TYPE_FAILURE:$this->setupIconAndColor(self::ICON_FAILURE, self::COLOR_ERROR);break;
            case self::TYPE_COMMENT:$this->setupIconAndColor(self::ICON_COMMENT, self::COLOR_PRIMARY);break;
            case self::TYPE_MESSAGE:$this->setupIconAndColor(self::ICON_MAIL, self::COLOR_YELLOW);break;
            case self::TYPE_ATTENTION_REQUIRED:$this->setupIconAndColor(self::ICON_THUNDER, self::COLOR_YELLOW);break;
            default : throw new \Exception("Unrecognized type of notification : ".$type);
        
        }
    }

    /**
     * Notification constructor. Constructs a new notification.
     *
     * @param $id
     * @param $category
     * @param $type
     * @param $title
     * @param $message
     * @param $created_at
     */
    public function __construct($id,$category,$type,$title,$message,$created_at) {
        $this->loadIconAndColorFromType($type);
        $this->id = $id;
        $this->category = $category;
        $this->type = $type;
        $this->title = $title;
        $this->message = $message;
        $this->created_at = $created_at;
    }
    
    public function __get($key) {
        if (isset($this->{$key}))
            return $this->{$key};
        throw new \Exception("Property ".$key." not found.");
    }
    
}