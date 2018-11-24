<?php
                
namespace App\Lang\Spots;
                
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
        return trans('spots/form.id');
    } 
                                                
    public static function playerId() {
        return trans('spots/form.player_id');
    } 
                                                
    public static function playerNameId() {
        return trans('spots/form.player_name_id');
    } 
                                                
    public static function nomeSpot() {
        return trans('spots/form.nome_spot');
    } 
                                                
    public static function metadataStatus_label() {
        return trans('spots/form.metadata_status.label');
    } 
                                                
    public static function metadataStatus_values_NOT_FETCHED() {
        return trans('spots/form.metadata_status.values.NOT_FETCHED');
    } 
                                                
    public static function metadataStatus_values_NOT_FOUND() {
        return trans('spots/form.metadata_status.values.NOT_FOUND');
    } 
                                                
    public static function metadataStatus_values_FOUND() {
        return trans('spots/form.metadata_status.values.FOUND');
    } 
                                        
    public static function metadataStatus_values() {
        return self::__values('spots/form.metadata_status.values',func_get_args());
    }
                                
    public static function crypted_label() {
        return trans('spots/form.crypted.label');
    } 
                                                
    public static function crypted_0() {
        return trans('spots/form.crypted.0');
    } 
                                                
    public static function crypted_1() {
        return trans('spots/form.crypted.1');
    } 
                                                
    public static function title() {
        return trans('spots/form.title');
    } 
                                                
    public static function genre() {
        return trans('spots/form.genre');
    } 
                                                
    public static function artist() {
        return trans('spots/form.artist');
    } 
                                                
    public static function album() {
        return trans('spots/form.album');
    } 
                                                
    public static function track() {
        return trans('spots/form.track');
    } 
                                                
    public static function date() {
        return trans('spots/form.date');
    } 
                                                
    public static function duration() {
        return trans('spots/form.duration');
    } 
                                                
    public static function bitrate() {
        return trans('spots/form.bitrate');
    } 
                                                
    public static function createdAt() {
        return trans('spots/form.created_at');
    } 
                                                
    public static function actions() {
        return trans('spots/form.actions');
    } 
                                                
    public static function crypted_values_0() {
        return trans('spots/form.crypted.values.0');
    } 
                                                
    public static function crypted_values_1() {
        return trans('spots/form.crypted.values.1');
    } 
                                        
    public static function crypted_values() {
        return self::__values('spots/form.crypted.values',func_get_args());
    }
                                
    public static function listen() {
        return trans('spots/form.listen');
    } 
                                                
    public static function addTrack() {
        return trans('spots/form.add_track');
    } 
                                                
    public static function trackType() {
        return trans('spots/form.track_type');
    } 
                                                
    public static function errors() {
        return trans('spots/form.errors');
    } 
                                                
    public static function fileNotFound() {
        return trans('spots/form.file_not_found');
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