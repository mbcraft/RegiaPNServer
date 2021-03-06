<?php
                
namespace App\Lang\SystemNotifications;
                
use Mbcraft\Laravel\GeneratorUtils;

/**
This class is generated by artisan lang:regenerate_helpers.
Manually editing is strongly discouraged.
*/
                
class LForm {
                                
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
                                
    public static function id() {
        return trans('system_notifications/form.id');
    } 
                                                
    public static function message() {
        return trans('system_notifications/form.message');
    } 
                                                
    public static function type_label() {
        return trans('system_notifications/form.type.label');
    } 
                                                
    public static function type_values_INFO() {
        return trans('system_notifications/form.type.values.INFO');
    } 
                                                
    public static function type_values_WARNING() {
        return trans('system_notifications/form.type.values.WARNING');
    } 
                                                
    public static function type_values_ERROR() {
        return trans('system_notifications/form.type.values.ERROR');
    } 
                                                
    public static function type_values_DEBUG() {
        return trans('system_notifications/form.type.values.DEBUG');
    } 
                                        
    public static function type_values() {
        return self::__values('system_notifications/form.type.values',func_get_args());
    }
                                
    public static function active_label() {
        return trans('system_notifications/form.active.label');
    } 
                                                
    public static function active_values_0() {
        return trans('system_notifications/form.active.values.0');
    } 
                                                
    public static function active_values_1() {
        return trans('system_notifications/form.active.values.1');
    } 
                                        
    public static function active_values() {
        return self::__values('system_notifications/form.active.values',func_get_args());
    }
                                
    public static function createdAt() {
        return trans('system_notifications/form.created_at');
    } 
                                                
    public static function actions() {
        return trans('system_notifications/form.actions');
    } 
                                                
    public static function readed_label() {
        return trans('system_notifications/form.readed.label');
    } 
                                                
    public static function readed_values_0() {
        return trans('system_notifications/form.readed.values.0');
    } 
                                                
    public static function readed_values_1() {
        return trans('system_notifications/form.readed.values.1');
    } 
                                        
    public static function readed_values() {
        return self::__values('system_notifications/form.readed.values',func_get_args());
    }
                                
    public static function firstName_placeholder() {
        return trans('form.first_name.placeholder');
    } 
                                                
    public static function lastName_placeholder() {
        return trans('form.last_name.placeholder');
    } 
                                                
    public static function password_placeholder() {
        return trans('form.password.placeholder');
    } 
                                                
    public static function passwordConfirm_placeholder() {
        return trans('form.password_confirm.placeholder');
    } 
                                                
    public static function companyName_placeholder() {
        return trans('form.company_name.placeholder');
    } 
                                                
    public static function address_placeholder() {
        return trans('form.address.placeholder');
    } 
                                                
    public static function postal_placeholder() {
        return trans('form.postal.placeholder');
    } 
                                                
    public static function city_placeholder() {
        return trans('form.city.placeholder');
    } 
                                                
    public static function province_placeholder() {
        return trans('form.province.placeholder');
    } 
                                                
    public static function country_placeholder() {
        return trans('form.country.placeholder');
    } 
                                                
    public static function fiscalCode_placeholder() {
        return trans('form.fiscal_code.placeholder');
    } 
                                                
    public static function vat_placeholder() {
        return trans('form.vat.placeholder');
    } 
                                                
    public static function dob_placeholder() {
        return trans('form.dob.placeholder');
    } 
                                                
    public static function phone_placeholder() {
        return trans('form.phone.placeholder');
    } 
                                                
    public static function webSite_placeholder() {
        return trans('form.web_site.placeholder');
    } 
                                                
    public static function email_placeholder() {
        return trans('form.email.placeholder');
    } 
                                                
    public static function notes_placeholder() {
        return trans('form.notes.placeholder');
    } 
                                                
    public static function editTooltip() {
        return trans('form.edit_tooltip');
    } 
                                                
    public static function deleteTooltip() {
        return trans('form.delete_tooltip');
    } 
                                                
    public static function showTooltip() {
        return trans('form.show_tooltip');
    } 
                                                
    public static function restoreTooltip() {
        return trans('form.restore_tooltip');
    } 
                                                
    public static function apiPassword_placeholder() {
        return trans('form.api_password.placeholder');
    } 
                                                
    public static function daytime_placeholder() {
        return trans('form.daytime.placeholder');
    } 
                                                
    public static function minutes_placeholder() {
        return trans('form.minutes.placeholder');
    } 
                                                
    public static function note() {
        return trans('form.note');
    } 
                                                
    public static function note_placeholder() {
        return trans('form.note.placeholder');
    } 
                                                
    public static function select_timeZone() {
        return trans('form.select.time_zone');
    } 
                                                
    public static function select_country() {
        return trans('form.select.country');
    } 
                                
}
