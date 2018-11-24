<?php
                
namespace App\Lang\Customers;
                
use Mbcraft\Laravel\GeneratorUtils;

/**
This class is generated by artisan lang:regenerate_helpers.
Manually editing is strongly discouraged.
*/
                
class LPages {
                                
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
                                
    public static function create() {
        return trans('customers/pages.create');
    } 
                                                
    public static function list_() {
        return trans('customers/pages.list');
    } 
                                                
    public static function show() {
        return trans('customers/pages.show');
    } 
                                                
    public static function edit() {
        return trans('customers/pages.edit');
    } 
                                
}
