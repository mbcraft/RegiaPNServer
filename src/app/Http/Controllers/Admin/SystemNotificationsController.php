<?php

namespace App\Http\Controllers\Admin;

use Mbcraft\Laravel\Http\Controllers\EntityController;

use Mbcraft\Laravel\Http\Controllers\Behaviours\Index;
use Mbcraft\Laravel\Http\Controllers\Behaviours\Show;
use Mbcraft\Laravel\Http\Controllers\Behaviours\Delete;

use Input;

class SystemNotificationsController extends EntityController
{

    const MODEL_CLASS = 'App\Models\SystemNotification';
    const VIEW_PREFIX = "admin.";
    const ROUTE_PREFIX = "admin.";
    
    function __construct() {
        $this->LMessage = new \App\Lang\LMessage();
    }
    

    
    protected $LMessage;
    
    use Index;
    use Show;
    use Delete;
    use NotificationReadedTrait;

    public function postReaded() {

        $id = Input::get('id');

        \Log::debug("id of ".static::class." : "+$id);

        $model_class = self::MODEL_CLASS;

        $notification = $model_class::findOrFail($id);

        \Log::debug(static::class." found.");

        $notification->readed = true;
        $notification->save();

        \Log::debug(static::class." ".$id." readed.");

        return $model_class::where('readed',false)->count();
    }
}
