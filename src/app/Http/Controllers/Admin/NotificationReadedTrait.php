<?php
/**
 * Created by PhpStorm.
 * User: marco
 * Date: 29/06/16
 * Time: 1.08
 */

namespace app\Http\Controllers\Admin;

use Input;

trait NotificationReadedTrait
{
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
    
    public function postDeleteAllReaded() {

        $model_class = self::MODEL_CLASS;
        
        $notifications = $model_class::where('readed',true)->get();
        
        foreach ($notifications as $notification) {
            $notification->delete();
        }
        
        return $this->getRedirectFor('index');
    }
}