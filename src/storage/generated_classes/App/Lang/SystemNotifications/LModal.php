<?php
                
namespace App\Lang\SystemNotifications;
                
use Mbcraft\Laravel\GeneratorUtils;

/**
This class is generated by artisan lang:regenerate_helpers.
Manually editing is strongly discouraged.
*/
                
class LModal {
                                
    public static function __callStatic($name,$args) {
        $key = GeneratorUtils::getKeyFromMethodName($name,$args);
        
        return "No value found for key : ".$key." .";
    }
   
    public function __call($name,$args) {
    
        $to_eval = "";
        foreach ($args as $k => $arg) {
            $param = $k;
            $$param = $arg;
            $to_eval.= $k.",";
        }
        $to_eval = substr($to_eval,0,strlen($to_eval)-2);
        return eval('return self::'.$name.'('.$to_eval.');');
    }
                
    private static function __values($key,$args) {
        if (count($args)==0) {
            return trans($key);
        } else {
            return trans($key.'.'.$args[0]);
        }
    }
                                
    public static function title() {
        return trans('system_notifications/modal.title');
    } 
                                                
    public static function body() {
        return trans('system_notifications/modal.body');
    } 
                                                
    public static function cancel() {
        return trans('system_notifications/modal.cancel');
    } 
                                                
    public static function confirm() {
        return trans('system_notifications/modal.confirm');
    } 
                                                
    public static function _title() {
        return trans('modal.title');
    } 
                                                
    public static function _body() {
        return trans('modal.body');
    } 
                                                
    public static function _cancel() {
        return trans('modal.cancel');
    } 
                                                
    public static function _confirm() {
        return trans('modal.confirm');
    } 
                                
}
