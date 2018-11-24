<?php
                
namespace App\Lang\Auth;
                
use Mbcraft\Laravel\GeneratorUtils;

/**
This class is generated by artisan lang:regenerate_helpers.
Manually editing is strongly discouraged.
*/
                
class LLogin {
                                
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
        return trans('auth/login.title');
    } 
                                                
    public static function rememberMe() {
        return trans('auth/login.remember_me');
    } 
                                                
    public static function forgotPassword() {
        return trans('auth/login.forgot_password');
    } 
                                                
    public static function pageTitle() {
        return trans('auth/login.page_title');
    } 
                                                
    public static function mailAddress() {
        return trans('auth/login.mail_address');
    } 
                                                
    public static function password() {
        return trans('auth/login.password');
    } 
                                                
    public static function welcome() {
        return trans('auth/login.welcome');
    } 
                                                
    public static function instructions() {
        return trans('auth/login.instructions');
    } 
                                                
    public static function submit() {
        return trans('auth/login.submit');
    } 
                                                
    public static function logout() {
        return trans('auth/login.logout');
    } 
                                
}
