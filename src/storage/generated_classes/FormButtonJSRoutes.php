<?php

    
/**
This class is generated with command artisan route:regenerate_helpers.
Manually editing is strongly discouraged.
*/
                
class FormButtonJSRoutes {
                                
    private static function __get_routing($method_name,$route_key,$args) {
    
        if (count($args)==0)
            return route($route_key);
        if (count($args)==1)
            return route($route_key,$args[0]);
        if (count($args)==2)
            return route($route_key,$args[0],$args[1]);
        if (count($args)==3)
            return route($route_key,$args[0],$args[1],$args[2]);
        if (count($args)==4)
            return route($route_key,$args[0],$args[1],$args[2],$args[3]);
        
        throw new \Exception($method_name . " : Too much parameters for route $route_key .");   
    }
                
    private static function __get_javascript_post_routing($method_name,$route_key,$args) {
        return "this.form.action='".self::__get_routing($method_name,$route_key,$args)."';this.form.submit();"; 
    }
                
    /**
     * This method returns the javascript code used for routing post actions 
     * related to this method name.
     * If inside event attribute, use FALSE or no parameters, otherwise use TRUE
     * to get the 'javascript:' prefix to use the return value as direct link.
     * This must be used only inside forms.
     * 
     * @returns string The javascript code that triggers post, with or without 'javascript:' prefix.
     */           
    public static function admin_users_create_do() {      
        $all_args = func_get_args();
        if (count($all_args)>0 && $all_args[0]===true) {
            $args = array_shift($all_args);
            return "javascript:".self::__get_javascript_post_routing('admin_users_create_do','admin.users.create.do',$args);
        } else {
            return self::__get_javascript_post_routing('admin_users_create_do','admin.users.create.do',$all_args);
        }
    }
                
    /**
     * This method returns the javascript code used for routing post actions 
     * related to this method name.
     * If inside event attribute, use FALSE or no parameters, otherwise use TRUE
     * to get the 'javascript:' prefix to use the return value as direct link.
     * This must be used only inside forms.
     * 
     * @returns string The javascript code that triggers post, with or without 'javascript:' prefix.
     */           
    public static function admin_users_edit_do() {      
        $all_args = func_get_args();
        if (count($all_args)>0 && $all_args[0]===true) {
            $args = array_shift($all_args);
            return "javascript:".self::__get_javascript_post_routing('admin_users_edit_do','admin.users.edit.do',$args);
        } else {
            return self::__get_javascript_post_routing('admin_users_edit_do','admin.users.edit.do',$all_args);
        }
    }
                
    /**
     * This method returns the javascript code used for routing post actions 
     * related to this method name.
     * If inside event attribute, use FALSE or no parameters, otherwise use TRUE
     * to get the 'javascript:' prefix to use the return value as direct link.
     * This must be used only inside forms.
     * 
     * @returns string The javascript code that triggers post, with or without 'javascript:' prefix.
     */           
    public static function admin_users_delete_do() {      
        $all_args = func_get_args();
        if (count($all_args)>0 && $all_args[0]===true) {
            $args = array_shift($all_args);
            return "javascript:".self::__get_javascript_post_routing('admin_users_delete_do','admin.users.delete.do',$args);
        } else {
            return self::__get_javascript_post_routing('admin_users_delete_do','admin.users.delete.do',$all_args);
        }
    }
                
    /**
     * This method returns the javascript code used for routing post actions 
     * related to this method name.
     * If inside event attribute, use FALSE or no parameters, otherwise use TRUE
     * to get the 'javascript:' prefix to use the return value as direct link.
     * This must be used only inside forms.
     * 
     * @returns string The javascript code that triggers post, with or without 'javascript:' prefix.
     */           
    public static function admin_users_restore_do() {      
        $all_args = func_get_args();
        if (count($all_args)>0 && $all_args[0]===true) {
            $args = array_shift($all_args);
            return "javascript:".self::__get_javascript_post_routing('admin_users_restore_do','admin.users.restore.do',$args);
        } else {
            return self::__get_javascript_post_routing('admin_users_restore_do','admin.users.restore.do',$all_args);
        }
    }
                
    /**
     * This method returns the javascript code used for routing post actions 
     * related to this method name.
     * If inside event attribute, use FALSE or no parameters, otherwise use TRUE
     * to get the 'javascript:' prefix to use the return value as direct link.
     * This must be used only inside forms.
     * 
     * @returns string The javascript code that triggers post, with or without 'javascript:' prefix.
     */           
    public static function admin_customers_create_do() {      
        $all_args = func_get_args();
        if (count($all_args)>0 && $all_args[0]===true) {
            $args = array_shift($all_args);
            return "javascript:".self::__get_javascript_post_routing('admin_customers_create_do','admin.customers.create.do',$args);
        } else {
            return self::__get_javascript_post_routing('admin_customers_create_do','admin.customers.create.do',$all_args);
        }
    }
                
    /**
     * This method returns the javascript code used for routing post actions 
     * related to this method name.
     * If inside event attribute, use FALSE or no parameters, otherwise use TRUE
     * to get the 'javascript:' prefix to use the return value as direct link.
     * This must be used only inside forms.
     * 
     * @returns string The javascript code that triggers post, with or without 'javascript:' prefix.
     */           
    public static function admin_customers_edit_do() {      
        $all_args = func_get_args();
        if (count($all_args)>0 && $all_args[0]===true) {
            $args = array_shift($all_args);
            return "javascript:".self::__get_javascript_post_routing('admin_customers_edit_do','admin.customers.edit.do',$args);
        } else {
            return self::__get_javascript_post_routing('admin_customers_edit_do','admin.customers.edit.do',$all_args);
        }
    }
                
    /**
     * This method returns the javascript code used for routing post actions 
     * related to this method name.
     * If inside event attribute, use FALSE or no parameters, otherwise use TRUE
     * to get the 'javascript:' prefix to use the return value as direct link.
     * This must be used only inside forms.
     * 
     * @returns string The javascript code that triggers post, with or without 'javascript:' prefix.
     */           
    public static function admin_customers_delete_do() {      
        $all_args = func_get_args();
        if (count($all_args)>0 && $all_args[0]===true) {
            $args = array_shift($all_args);
            return "javascript:".self::__get_javascript_post_routing('admin_customers_delete_do','admin.customers.delete.do',$args);
        } else {
            return self::__get_javascript_post_routing('admin_customers_delete_do','admin.customers.delete.do',$all_args);
        }
    }
                
    /**
     * This method returns the javascript code used for routing post actions 
     * related to this method name.
     * If inside event attribute, use FALSE or no parameters, otherwise use TRUE
     * to get the 'javascript:' prefix to use the return value as direct link.
     * This must be used only inside forms.
     * 
     * @returns string The javascript code that triggers post, with or without 'javascript:' prefix.
     */           
    public static function admin_customers_restore_do() {      
        $all_args = func_get_args();
        if (count($all_args)>0 && $all_args[0]===true) {
            $args = array_shift($all_args);
            return "javascript:".self::__get_javascript_post_routing('admin_customers_restore_do','admin.customers.restore.do',$args);
        } else {
            return self::__get_javascript_post_routing('admin_customers_restore_do','admin.customers.restore.do',$all_args);
        }
    }
                
    /**
     * This method returns the javascript code used for routing post actions 
     * related to this method name.
     * If inside event attribute, use FALSE or no parameters, otherwise use TRUE
     * to get the 'javascript:' prefix to use the return value as direct link.
     * This must be used only inside forms.
     * 
     * @returns string The javascript code that triggers post, with or without 'javascript:' prefix.
     */           
    public static function admin_players_create_do() {      
        $all_args = func_get_args();
        if (count($all_args)>0 && $all_args[0]===true) {
            $args = array_shift($all_args);
            return "javascript:".self::__get_javascript_post_routing('admin_players_create_do','admin.players.create.do',$args);
        } else {
            return self::__get_javascript_post_routing('admin_players_create_do','admin.players.create.do',$all_args);
        }
    }
                
    /**
     * This method returns the javascript code used for routing post actions 
     * related to this method name.
     * If inside event attribute, use FALSE or no parameters, otherwise use TRUE
     * to get the 'javascript:' prefix to use the return value as direct link.
     * This must be used only inside forms.
     * 
     * @returns string The javascript code that triggers post, with or without 'javascript:' prefix.
     */           
    public static function admin_players_edit_do() {      
        $all_args = func_get_args();
        if (count($all_args)>0 && $all_args[0]===true) {
            $args = array_shift($all_args);
            return "javascript:".self::__get_javascript_post_routing('admin_players_edit_do','admin.players.edit.do',$args);
        } else {
            return self::__get_javascript_post_routing('admin_players_edit_do','admin.players.edit.do',$all_args);
        }
    }
                
    /**
     * This method returns the javascript code used for routing post actions 
     * related to this method name.
     * If inside event attribute, use FALSE or no parameters, otherwise use TRUE
     * to get the 'javascript:' prefix to use the return value as direct link.
     * This must be used only inside forms.
     * 
     * @returns string The javascript code that triggers post, with or without 'javascript:' prefix.
     */           
    public static function admin_players_delete_do() {      
        $all_args = func_get_args();
        if (count($all_args)>0 && $all_args[0]===true) {
            $args = array_shift($all_args);
            return "javascript:".self::__get_javascript_post_routing('admin_players_delete_do','admin.players.delete.do',$args);
        } else {
            return self::__get_javascript_post_routing('admin_players_delete_do','admin.players.delete.do',$all_args);
        }
    }
                
    /**
     * This method returns the javascript code used for routing post actions 
     * related to this method name.
     * If inside event attribute, use FALSE or no parameters, otherwise use TRUE
     * to get the 'javascript:' prefix to use the return value as direct link.
     * This must be used only inside forms.
     * 
     * @returns string The javascript code that triggers post, with or without 'javascript:' prefix.
     */           
    public static function admin_players_restore_do() {      
        $all_args = func_get_args();
        if (count($all_args)>0 && $all_args[0]===true) {
            $args = array_shift($all_args);
            return "javascript:".self::__get_javascript_post_routing('admin_players_restore_do','admin.players.restore.do',$args);
        } else {
            return self::__get_javascript_post_routing('admin_players_restore_do','admin.players.restore.do',$all_args);
        }
    }
                
    /**
     * This method returns the javascript code used for routing post actions 
     * related to this method name.
     * If inside event attribute, use FALSE or no parameters, otherwise use TRUE
     * to get the 'javascript:' prefix to use the return value as direct link.
     * This must be used only inside forms.
     * 
     * @returns string The javascript code that triggers post, with or without 'javascript:' prefix.
     */           
    public static function admin_playlists_create_do() {      
        $all_args = func_get_args();
        if (count($all_args)>0 && $all_args[0]===true) {
            $args = array_shift($all_args);
            return "javascript:".self::__get_javascript_post_routing('admin_playlists_create_do','admin.playlists.create.do',$args);
        } else {
            return self::__get_javascript_post_routing('admin_playlists_create_do','admin.playlists.create.do',$all_args);
        }
    }
                
    /**
     * This method returns the javascript code used for routing post actions 
     * related to this method name.
     * If inside event attribute, use FALSE or no parameters, otherwise use TRUE
     * to get the 'javascript:' prefix to use the return value as direct link.
     * This must be used only inside forms.
     * 
     * @returns string The javascript code that triggers post, with or without 'javascript:' prefix.
     */           
    public static function admin_playlists_edit_do() {      
        $all_args = func_get_args();
        if (count($all_args)>0 && $all_args[0]===true) {
            $args = array_shift($all_args);
            return "javascript:".self::__get_javascript_post_routing('admin_playlists_edit_do','admin.playlists.edit.do',$args);
        } else {
            return self::__get_javascript_post_routing('admin_playlists_edit_do','admin.playlists.edit.do',$all_args);
        }
    }
                
    /**
     * This method returns the javascript code used for routing post actions 
     * related to this method name.
     * If inside event attribute, use FALSE or no parameters, otherwise use TRUE
     * to get the 'javascript:' prefix to use the return value as direct link.
     * This must be used only inside forms.
     * 
     * @returns string The javascript code that triggers post, with or without 'javascript:' prefix.
     */           
    public static function admin_playlists_delete_do() {      
        $all_args = func_get_args();
        if (count($all_args)>0 && $all_args[0]===true) {
            $args = array_shift($all_args);
            return "javascript:".self::__get_javascript_post_routing('admin_playlists_delete_do','admin.playlists.delete.do',$args);
        } else {
            return self::__get_javascript_post_routing('admin_playlists_delete_do','admin.playlists.delete.do',$all_args);
        }
    }
                
    /**
     * This method returns the javascript code used for routing post actions 
     * related to this method name.
     * If inside event attribute, use FALSE or no parameters, otherwise use TRUE
     * to get the 'javascript:' prefix to use the return value as direct link.
     * This must be used only inside forms.
     * 
     * @returns string The javascript code that triggers post, with or without 'javascript:' prefix.
     */           
    public static function admin_spots_delete_do() {      
        $all_args = func_get_args();
        if (count($all_args)>0 && $all_args[0]===true) {
            $args = array_shift($all_args);
            return "javascript:".self::__get_javascript_post_routing('admin_spots_delete_do','admin.spots.delete.do',$args);
        } else {
            return self::__get_javascript_post_routing('admin_spots_delete_do','admin.spots.delete.do',$all_args);
        }
    }
                
    /**
     * This method returns the javascript code used for routing post actions 
     * related to this method name.
     * If inside event attribute, use FALSE or no parameters, otherwise use TRUE
     * to get the 'javascript:' prefix to use the return value as direct link.
     * This must be used only inside forms.
     * 
     * @returns string The javascript code that triggers post, with or without 'javascript:' prefix.
     */           
    public static function admin_settings_edit_do() {      
        $all_args = func_get_args();
        if (count($all_args)>0 && $all_args[0]===true) {
            $args = array_shift($all_args);
            return "javascript:".self::__get_javascript_post_routing('admin_settings_edit_do','admin.settings.edit.do',$args);
        } else {
            return self::__get_javascript_post_routing('admin_settings_edit_do','admin.settings.edit.do',$all_args);
        }
    }
                
    /**
     * This method returns the javascript code used for routing post actions 
     * related to this method name.
     * If inside event attribute, use FALSE or no parameters, otherwise use TRUE
     * to get the 'javascript:' prefix to use the return value as direct link.
     * This must be used only inside forms.
     * 
     * @returns string The javascript code that triggers post, with or without 'javascript:' prefix.
     */           
    public static function admin_albums_delete_do() {      
        $all_args = func_get_args();
        if (count($all_args)>0 && $all_args[0]===true) {
            $args = array_shift($all_args);
            return "javascript:".self::__get_javascript_post_routing('admin_albums_delete_do','admin.albums.delete.do',$args);
        } else {
            return self::__get_javascript_post_routing('admin_albums_delete_do','admin.albums.delete.do',$all_args);
        }
    }
                
    /**
     * This method returns the javascript code used for routing post actions 
     * related to this method name.
     * If inside event attribute, use FALSE or no parameters, otherwise use TRUE
     * to get the 'javascript:' prefix to use the return value as direct link.
     * This must be used only inside forms.
     * 
     * @returns string The javascript code that triggers post, with or without 'javascript:' prefix.
     */           
    public static function admin_songs_delete_do() {      
        $all_args = func_get_args();
        if (count($all_args)>0 && $all_args[0]===true) {
            $args = array_shift($all_args);
            return "javascript:".self::__get_javascript_post_routing('admin_songs_delete_do','admin.songs.delete.do',$args);
        } else {
            return self::__get_javascript_post_routing('admin_songs_delete_do','admin.songs.delete.do',$all_args);
        }
    }
                
    /**
     * This method returns the javascript code used for routing post actions 
     * related to this method name.
     * If inside event attribute, use FALSE or no parameters, otherwise use TRUE
     * to get the 'javascript:' prefix to use the return value as direct link.
     * This must be used only inside forms.
     * 
     * @returns string The javascript code that triggers post, with or without 'javascript:' prefix.
     */           
    public static function admin_systemNotifications_delete_do() {      
        $all_args = func_get_args();
        if (count($all_args)>0 && $all_args[0]===true) {
            $args = array_shift($all_args);
            return "javascript:".self::__get_javascript_post_routing('admin_systemNotifications_delete_do','admin.system_notifications.delete.do',$args);
        } else {
            return self::__get_javascript_post_routing('admin_systemNotifications_delete_do','admin.system_notifications.delete.do',$all_args);
        }
    }
                
    /**
     * This method returns the javascript code used for routing post actions 
     * related to this method name.
     * If inside event attribute, use FALSE or no parameters, otherwise use TRUE
     * to get the 'javascript:' prefix to use the return value as direct link.
     * This must be used only inside forms.
     * 
     * @returns string The javascript code that triggers post, with or without 'javascript:' prefix.
     */           
    public static function admin_systemNotifications_readed_do() {      
        $all_args = func_get_args();
        if (count($all_args)>0 && $all_args[0]===true) {
            $args = array_shift($all_args);
            return "javascript:".self::__get_javascript_post_routing('admin_systemNotifications_readed_do','admin.system_notifications.readed.do',$args);
        } else {
            return self::__get_javascript_post_routing('admin_systemNotifications_readed_do','admin.system_notifications.readed.do',$all_args);
        }
    }
                
    /**
     * This method returns the javascript code used for routing post actions 
     * related to this method name.
     * If inside event attribute, use FALSE or no parameters, otherwise use TRUE
     * to get the 'javascript:' prefix to use the return value as direct link.
     * This must be used only inside forms.
     * 
     * @returns string The javascript code that triggers post, with or without 'javascript:' prefix.
     */           
    public static function admin_systemNotifications_deleteAllReaded_do() {      
        $all_args = func_get_args();
        if (count($all_args)>0 && $all_args[0]===true) {
            $args = array_shift($all_args);
            return "javascript:".self::__get_javascript_post_routing('admin_systemNotifications_deleteAllReaded_do','admin.system_notifications.delete_all_readed.do',$args);
        } else {
            return self::__get_javascript_post_routing('admin_systemNotifications_deleteAllReaded_do','admin.system_notifications.delete_all_readed.do',$all_args);
        }
    }
                
    /**
     * This method returns the javascript code used for routing post actions 
     * related to this method name.
     * If inside event attribute, use FALSE or no parameters, otherwise use TRUE
     * to get the 'javascript:' prefix to use the return value as direct link.
     * This must be used only inside forms.
     * 
     * @returns string The javascript code that triggers post, with or without 'javascript:' prefix.
     */           
    public static function admin_playerNotifications_delete_do() {      
        $all_args = func_get_args();
        if (count($all_args)>0 && $all_args[0]===true) {
            $args = array_shift($all_args);
            return "javascript:".self::__get_javascript_post_routing('admin_playerNotifications_delete_do','admin.player_notifications.delete.do',$args);
        } else {
            return self::__get_javascript_post_routing('admin_playerNotifications_delete_do','admin.player_notifications.delete.do',$all_args);
        }
    }
                
    /**
     * This method returns the javascript code used for routing post actions 
     * related to this method name.
     * If inside event attribute, use FALSE or no parameters, otherwise use TRUE
     * to get the 'javascript:' prefix to use the return value as direct link.
     * This must be used only inside forms.
     * 
     * @returns string The javascript code that triggers post, with or without 'javascript:' prefix.
     */           
    public static function admin_playerNotifications_readed_do() {      
        $all_args = func_get_args();
        if (count($all_args)>0 && $all_args[0]===true) {
            $args = array_shift($all_args);
            return "javascript:".self::__get_javascript_post_routing('admin_playerNotifications_readed_do','admin.player_notifications.readed.do',$args);
        } else {
            return self::__get_javascript_post_routing('admin_playerNotifications_readed_do','admin.player_notifications.readed.do',$all_args);
        }
    }
                
    /**
     * This method returns the javascript code used for routing post actions 
     * related to this method name.
     * If inside event attribute, use FALSE or no parameters, otherwise use TRUE
     * to get the 'javascript:' prefix to use the return value as direct link.
     * This must be used only inside forms.
     * 
     * @returns string The javascript code that triggers post, with or without 'javascript:' prefix.
     */           
    public static function admin_playerNotifications_deleteAllReaded_do() {      
        $all_args = func_get_args();
        if (count($all_args)>0 && $all_args[0]===true) {
            $args = array_shift($all_args);
            return "javascript:".self::__get_javascript_post_routing('admin_playerNotifications_deleteAllReaded_do','admin.player_notifications.delete_all_readed.do',$args);
        } else {
            return self::__get_javascript_post_routing('admin_playerNotifications_deleteAllReaded_do','admin.player_notifications.delete_all_readed.do',$all_args);
        }
    }
                
    /**
     * This method returns the javascript code used for routing post actions 
     * related to this method name.
     * If inside event attribute, use FALSE or no parameters, otherwise use TRUE
     * to get the 'javascript:' prefix to use the return value as direct link.
     * This must be used only inside forms.
     * 
     * @returns string The javascript code that triggers post, with or without 'javascript:' prefix.
     */           
    public static function admin_system_toggleBackgroundScanningAndEncoding_do() {      
        $all_args = func_get_args();
        if (count($all_args)>0 && $all_args[0]===true) {
            $args = array_shift($all_args);
            return "javascript:".self::__get_javascript_post_routing('admin_system_toggleBackgroundScanningAndEncoding_do','admin.system.toggle_background_scanning_and_encoding.do',$args);
        } else {
            return self::__get_javascript_post_routing('admin_system_toggleBackgroundScanningAndEncoding_do','admin.system.toggle_background_scanning_and_encoding.do',$all_args);
        }
    }
                
    /**
     * This method returns the javascript code used for routing post actions 
     * related to this method name.
     * If inside event attribute, use FALSE or no parameters, otherwise use TRUE
     * to get the 'javascript:' prefix to use the return value as direct link.
     * This must be used only inside forms.
     * 
     * @returns string The javascript code that triggers post, with or without 'javascript:' prefix.
     */           
    public static function admin_system_scan_do() {      
        $all_args = func_get_args();
        if (count($all_args)>0 && $all_args[0]===true) {
            $args = array_shift($all_args);
            return "javascript:".self::__get_javascript_post_routing('admin_system_scan_do','admin.system.scan.do',$args);
        } else {
            return self::__get_javascript_post_routing('admin_system_scan_do','admin.system.scan.do',$all_args);
        }
    }
                                
}
                