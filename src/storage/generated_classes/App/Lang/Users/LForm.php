<?php
                
namespace App\Lang\Users;
                
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
                                
    public static function userProfile() {
        return trans('users/form.user_profile');
    } 
                                                
    public static function firstName() {
        return trans('users/form.first_name');
    } 
                                                
    public static function lastName() {
        return trans('users/form.last_name');
    } 
                                                
    public static function email() {
        return trans('users/form.email');
    } 
                                                
    public static function phone() {
        return trans('users/form.phone');
    } 
                                                
    public static function address() {
        return trans('users/form.address');
    } 
                                                
    public static function city() {
        return trans('users/form.city');
    } 
                                                
    public static function status_label() {
        return trans('users/form.status.label');
    } 
                                                
    public static function status_activated() {
        return trans('users/form.status.activated');
    } 
                                                
    public static function status_pending() {
        return trans('users/form.status.pending');
    } 
                                                
    public static function createdAt() {
        return trans('users/form.created_at');
    } 
                                                
    public static function selectImage() {
        return trans('users/form.select_image');
    } 
                                                
    public static function gender() {
        return trans('users/form.gender');
    } 
                                                
    public static function dob() {
        return trans('users/form.dob');
    } 
                                                
    public static function country() {
        return trans('users/form.country');
    } 
                                                
    public static function state() {
        return trans('users/form.state');
    } 
                                                
    public static function postal() {
        return trans('users/form.postal');
    } 
                                                
    public static function apiPassword() {
        return trans('users/form.api_password');
    } 
                                                
    public static function registrationCode() {
        return trans('users/form.registration_code');
    } 
                                                
    public static function actions() {
        return trans('users/form.actions');
    } 
                                                
    public static function uploadAvatar() {
        return trans('users/form.upload_avatar');
    } 
                                                
    public static function userName() {
        return trans('users/form.user_name');
    } 
                                                
    public static function firstName_placeholder() {
        return trans('users/form.first_name.placeholder');
    } 
                                                
    public static function lastName_placeholder() {
        return trans('users/form.last_name.placeholder');
    } 
                                                
    public static function email_placeholder() {
        return trans('users/form.email.placeholder');
    } 
                                                
    public static function password() {
        return trans('users/form.password');
    } 
                                                
    public static function passwordConfirm() {
        return trans('users/form.password_confirm');
    } 
                                                
    public static function ifNoChangePassword() {
        return trans('users/form.if_no_change_password');
    } 
                                                
    public static function status_values_activated() {
        return trans('users/form.status.values.activated');
    } 
                                                
    public static function status_values_pending() {
        return trans('users/form.status.values.pending');
    } 
                                                
    public static function status_values_deleted() {
        return trans('users/form.status.values.deleted');
    } 
                                        
    public static function status_values() {
        return self::__values('users/form.status.values',func_get_args());
    }
                                
    public static function activateUser() {
        return trans('users/form.activate_user');
    } 
                                                
    public static function roles_label() {
        return trans('users/form.roles.label');
    } 
                                                
    public static function roles_select() {
        return trans('users/form.roles.select');
    } 
                                                
    public static function roles_placeholder() {
        return trans('users/form.roles.placeholder');
    } 
                                                
    public static function pic_label() {
        return trans('users/form.pic.label');
    } 
                                                
    public static function pic_selectImage() {
        return trans('users/form.pic.select_image');
    } 
                                                
    public static function pic_change() {
        return trans('users/form.pic.change');
    } 
                                                
    public static function pic_remove() {
        return trans('users/form.pic.remove');
    } 
                                                
    public static function gender_label() {
        return trans('users/form.gender.label');
    } 
                                                
    public static function gender_values_M() {
        return trans('users/form.gender.values.M');
    } 
                                                
    public static function gender_values_F() {
        return trans('users/form.gender.values.F');
    } 
                                                
    public static function gender_values_O() {
        return trans('users/form.gender.values.O');
    } 
                                        
    public static function gender_values() {
        return self::__values('users/form.gender.values',func_get_args());
    }
                                
    public static function province() {
        return trans('users/form.province');
    } 
                                                
    public static function _firstName_placeholder() {
        return trans('form.first_name.placeholder');
    } 
                                                
    public static function _lastName_placeholder() {
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
                                                
    public static function _email_placeholder() {
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
