<?php
                
namespace App\Lang\Players;
                
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
        return trans('players/table.name');
    } 
                                                
    public static function general() {
        return trans('players/table.general');
    } 
                                                
    public static function permissions() {
        return trans('players/table.permissions');
    } 
                                                
    public static function list_() {
        return trans('players/table.list');
    } 
                                                
    public static function listForCustomer() {
        return trans('players/table.list_for_customer');
    } 
                                                
    public static function edit() {
        return trans('players/table.edit');
    } 
                                                
    public static function show() {
        return trans('players/table.show');
    } 
                                                
    public static function location() {
        return trans('players/table.location');
    } 
                                                
    public static function settings() {
        return trans('players/table.settings');
    } 
                                                
    public static function dates() {
        return trans('players/table.dates');
    } 
                                                
    public static function noEntities() {
        return trans('players/table.no_entities');
    } 
                                                
    public static function downloadLink() {
        return trans('players/table.download_link');
    } 
                                                
    public static function downloadLocation() {
        return trans('players/table.download_location');
    } 
                                                
    public static function clickToDownload() {
        return trans('players/table.click_to_download');
    } 
                                
}
