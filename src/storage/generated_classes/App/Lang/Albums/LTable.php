<?php
                
namespace App\Lang\Albums;
                
use Mbcraft\Laravel\GeneratorUtils;

/**
This class is generated by artisan lang:regenerate_helpers.
Manually editing is strongly discouraged.
*/
                
class LTable {
                                
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
                                
    public static function name() {
        return trans('albums/table.name');
    } 
                                                
    public static function general() {
        return trans('albums/table.general');
    } 
                                                
    public static function permissions() {
        return trans('albums/table.permissions');
    } 
                                                
    public static function list_() {
        return trans('albums/table.list');
    } 
                                                
    public static function listForAlbum() {
        return trans('albums/table.list_for_album');
    } 
                                
}
