<?php
                
namespace App\Lang\Customers;
                
use Mbcraft\Laravel\GeneratorUtils;

/**
This class is generated by artisan lang:regenerate_helpers.
Manually editing is strongly discouraged.
*/
                
class LMessage {
                                
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
                                
    public static function customerExists() {
        return trans('customers/message.customer_exists');
    } 
                                                
    public static function customerNotFound() {
        return trans('customers/message.customer_not_found');
    } 
                                                
    public static function success_create() {
        return trans('customers/message.success.create');
    } 
                                                
    public static function success_update() {
        return trans('customers/message.success.update');
    } 
                                                
    public static function success_delete() {
        return trans('customers/message.success.delete');
    } 
                                                
    public static function error_create() {
        return trans('customers/message.error.create');
    } 
                                                
    public static function error_update() {
        return trans('customers/message.error.update');
    } 
                                                
    public static function error_delete() {
        return trans('customers/message.error.delete');
    } 
                                                
    public static function success_created() {
        return trans('customers/message.success.created');
    } 
                                                
    public static function success_updated() {
        return trans('customers/message.success.updated');
    } 
                                                
    public static function success_deleted() {
        return trans('customers/message.success.deleted');
    } 
                                                
    public static function success_restored() {
        return trans('customers/message.success.restored');
    } 
                                                
    public static function error_created() {
        return trans('customers/message.error.created');
    } 
                                                
    public static function error_updated() {
        return trans('customers/message.error.updated');
    } 
                                                
    public static function error_deleted() {
        return trans('customers/message.error.deleted');
    } 
                                                
    public static function error_restored() {
        return trans('customers/message.error.restored');
    } 
                                                
    public static function exists() {
        return trans('message.exists');
    } 
                                                
    public static function notFound() {
        return trans('message._not_found');
    } 
                                                
    public static function nameRequired() {
        return trans('message._name_required');
    } 
                                                
    public static function _success_create() {
        return trans('message.success.create');
    } 
                                                
    public static function _success_update() {
        return trans('message.success.update');
    } 
                                                
    public static function _success_delete() {
        return trans('message.success.delete');
    } 
                                                
    public static function delete_create() {
        return trans('message.delete.create');
    } 
                                                
    public static function delete_update() {
        return trans('message.delete.update');
    } 
                                                
    public static function delete_delete() {
        return trans('message.delete.delete');
    } 
                                                
    public static function error_itemExists() {
        return trans('message.error.item_exists');
    } 
                                                
    public static function _success_created() {
        return trans('message.success.created');
    } 
                                                
    public static function _success_updated() {
        return trans('message.success.updated');
    } 
                                                
    public static function _success_deleted() {
        return trans('message.success.deleted');
    } 
                                                
    public static function _error_created() {
        return trans('message.error.created');
    } 
                                                
    public static function _error_updated() {
        return trans('message.error.updated');
    } 
                                                
    public static function _error_deleted() {
        return trans('message.error.deleted');
    } 
                                                
    public static function error_alreadyExists() {
        return trans('message.error.already_exists');
    } 
                                                
    public static function error_notFound() {
        return trans('message.error.not_found');
    } 
                                                
    public static function error_nameRequired() {
        return trans('message.error.name_required');
    } 
                                
}
