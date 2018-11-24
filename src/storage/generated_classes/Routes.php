<?php

    
/**
This class is generated with command artisan route:regenerate_helpers.
Manually editing is strongly discouraged.
*/
                
class Routes {
                                
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
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function home() {      
        return self::__get_routing('home','home',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function credits() {      
        return self::__get_routing('credits','credits',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_login() {      
        return self::__get_routing('admin_login','admin/login',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function logout() {      
        return self::__get_routing('logout','logout',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_forgotPassword() {      
        return self::__get_routing('admin_forgotPassword','admin/forgot_password',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function downloadPlayerUpdate() {      
        return self::__get_routing('downloadPlayerUpdate','download_player_update',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function dashboard() {      
        return self::__get_routing('dashboard','dashboard',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_users_index() {      
        return self::__get_routing('admin_users_index','admin.users.index',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_users_create() {      
        return self::__get_routing('admin_users_create','admin.users.create',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_users_create_do() {      
        return self::__get_routing('admin_users_create_do','admin.users.create.do',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_users_edit() {      
        return self::__get_routing('admin_users_edit','admin.users.edit',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_users_edit_do() {      
        return self::__get_routing('admin_users_edit_do','admin.users.edit.do',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_users_delete_do() {      
        return self::__get_routing('admin_users_delete_do','admin.users.delete.do',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_users_confirmDelete() {      
        return self::__get_routing('admin_users_confirmDelete','admin.users.confirm-delete',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_users_restore_do() {      
        return self::__get_routing('admin_users_restore_do','admin.users.restore.do',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_users_show() {      
        return self::__get_routing('admin_users_show','admin.users.show',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_customers_index() {      
        return self::__get_routing('admin_customers_index','admin.customers.index',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_customers_create() {      
        return self::__get_routing('admin_customers_create','admin.customers.create',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_customers_create_do() {      
        return self::__get_routing('admin_customers_create_do','admin.customers.create.do',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_customers_edit() {      
        return self::__get_routing('admin_customers_edit','admin.customers.edit',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_customers_edit_do() {      
        return self::__get_routing('admin_customers_edit_do','admin.customers.edit.do',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_customers_delete_do() {      
        return self::__get_routing('admin_customers_delete_do','admin.customers.delete.do',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_customers_confirmDelete() {      
        return self::__get_routing('admin_customers_confirmDelete','admin.customers.confirm-delete',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_customers_restore_do() {      
        return self::__get_routing('admin_customers_restore_do','admin.customers.restore.do',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_customers_show() {      
        return self::__get_routing('admin_customers_show','admin.customers.show',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_customers_players() {      
        return self::__get_routing('admin_customers_players','admin.customers.players',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_players_index() {      
        return self::__get_routing('admin_players_index','admin.players.index',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_players_create() {      
        return self::__get_routing('admin_players_create','admin.players.create',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_players_create_do() {      
        return self::__get_routing('admin_players_create_do','admin.players.create.do',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_players_edit() {      
        return self::__get_routing('admin_players_edit','admin.players.edit',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_players_edit_do() {      
        return self::__get_routing('admin_players_edit_do','admin.players.edit.do',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_players_delete_do() {      
        return self::__get_routing('admin_players_delete_do','admin.players.delete.do',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_players_confirmDelete() {      
        return self::__get_routing('admin_players_confirmDelete','admin.players.confirm-delete',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_players_restore_do() {      
        return self::__get_routing('admin_players_restore_do','admin.players.restore.do',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_players_show() {      
        return self::__get_routing('admin_players_show','admin.players.show',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_players_generateUpdatePackage() {      
        return self::__get_routing('admin_players_generateUpdatePackage','admin.players.generate_update_package',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_players_spots() {      
        return self::__get_routing('admin_players_spots','admin.players.spots',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_players_playlists() {      
        return self::__get_routing('admin_players_playlists','admin.players.playlists',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_players_playerNotifications() {      
        return self::__get_routing('admin_players_playerNotifications','admin.players.player_notifications',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_playlists_index() {      
        return self::__get_routing('admin_playlists_index','admin.playlists.index',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_playlists_create() {      
        return self::__get_routing('admin_playlists_create','admin.playlists.create',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_playlists_create_do() {      
        return self::__get_routing('admin_playlists_create_do','admin.playlists.create.do',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_playlists_edit() {      
        return self::__get_routing('admin_playlists_edit','admin.playlists.edit',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_playlists_edit_do() {      
        return self::__get_routing('admin_playlists_edit_do','admin.playlists.edit.do',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_playlists_delete_do() {      
        return self::__get_routing('admin_playlists_delete_do','admin.playlists.delete.do',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_playlists_confirmDelete() {      
        return self::__get_routing('admin_playlists_confirmDelete','admin.playlists.confirm-delete',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_playlists_show() {      
        return self::__get_routing('admin_playlists_show','admin.playlists.show',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_spots_index() {      
        return self::__get_routing('admin_spots_index','admin.spots.index',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_spots_delete_do() {      
        return self::__get_routing('admin_spots_delete_do','admin.spots.delete.do',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_spots_confirmDelete() {      
        return self::__get_routing('admin_spots_confirmDelete','admin.spots.confirm-delete',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_spots_show() {      
        return self::__get_routing('admin_spots_show','admin.spots.show',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_settings_index() {      
        return self::__get_routing('admin_settings_index','admin.settings.index',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_settings_edit() {      
        return self::__get_routing('admin_settings_edit','admin.settings.edit',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_settings_edit_do() {      
        return self::__get_routing('admin_settings_edit_do','admin.settings.edit.do',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_settings_show() {      
        return self::__get_routing('admin_settings_show','admin.settings.show',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_albums_index() {      
        return self::__get_routing('admin_albums_index','admin.albums.index',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_albums_delete_do() {      
        return self::__get_routing('admin_albums_delete_do','admin.albums.delete.do',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_albums_confirmDelete() {      
        return self::__get_routing('admin_albums_confirmDelete','admin.albums.confirm-delete',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_albums_show() {      
        return self::__get_routing('admin_albums_show','admin.albums.show',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_songs_index() {      
        return self::__get_routing('admin_songs_index','admin.songs.index',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_songs_delete_do() {      
        return self::__get_routing('admin_songs_delete_do','admin.songs.delete.do',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_songs_confirmDelete() {      
        return self::__get_routing('admin_songs_confirmDelete','admin.songs.confirm-delete',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_songs_show() {      
        return self::__get_routing('admin_songs_show','admin.songs.show',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_systemNotifications_index() {      
        return self::__get_routing('admin_systemNotifications_index','admin.system_notifications.index',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_systemNotifications_delete_do() {      
        return self::__get_routing('admin_systemNotifications_delete_do','admin.system_notifications.delete.do',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_systemNotifications_confirmDelete() {      
        return self::__get_routing('admin_systemNotifications_confirmDelete','admin.system_notifications.confirm-delete',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_systemNotifications_show() {      
        return self::__get_routing('admin_systemNotifications_show','admin.system_notifications.show',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_systemNotifications_readed_do() {      
        return self::__get_routing('admin_systemNotifications_readed_do','admin.system_notifications.readed.do',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_systemNotifications_deleteAllReaded_do() {      
        return self::__get_routing('admin_systemNotifications_deleteAllReaded_do','admin.system_notifications.delete_all_readed.do',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_playerNotifications_index() {      
        return self::__get_routing('admin_playerNotifications_index','admin.player_notifications.index',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_playerNotifications_delete_do() {      
        return self::__get_routing('admin_playerNotifications_delete_do','admin.player_notifications.delete.do',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_playerNotifications_confirmDelete() {      
        return self::__get_routing('admin_playerNotifications_confirmDelete','admin.player_notifications.confirm-delete',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_playerNotifications_show() {      
        return self::__get_routing('admin_playerNotifications_show','admin.player_notifications.show',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_playerNotifications_readed_do() {      
        return self::__get_routing('admin_playerNotifications_readed_do','admin.player_notifications.readed.do',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_playerNotifications_deleteAllReaded_do() {      
        return self::__get_routing('admin_playerNotifications_deleteAllReaded_do','admin.player_notifications.delete_all_readed.do',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_system_operations() {      
        return self::__get_routing('admin_system_operations','admin.system.operations',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_system_toggleBackgroundScanningAndEncoding_do() {      
        return self::__get_routing('admin_system_toggleBackgroundScanningAndEncoding_do','admin.system.toggle_background_scanning_and_encoding.do',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function admin_system_scan_do() {      
        return self::__get_routing('admin_system_scan_do','admin.system.scan.do',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function error() {      
        return self::__get_routing('error','error',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function registerNewInstance() {      
        return self::__get_routing('registerNewInstance','register_new_instance',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function instanceStarted() {      
        return self::__get_routing('instanceStarted','instance_started',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function serviceStarted() {      
        return self::__get_routing('serviceStarted','service_started',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function serviceStopped() {      
        return self::__get_routing('serviceStopped','service_stopped',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function updateStarted() {      
        return self::__get_routing('updateStarted','update_started',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function updateCompleted() {      
        return self::__get_routing('updateCompleted','update_completed',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function check() {      
        return self::__get_routing('check','check',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function request() {      
        return self::__get_routing('request','request',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function download() {      
        return self::__get_routing('download','download',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function timedScanAndEncode() {      
        return self::__get_routing('timedScanAndEncode','timed_scan_and_encode',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function testInternalServerError() {      
        return self::__get_routing('testInternalServerError','test_internal_server_error',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function getMusicStatus() {      
        return self::__get_routing('getMusicStatus','get_music_status',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function encryptSong() {      
        return self::__get_routing('encryptSong','encrypt_song',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function encryptSpot() {      
        return self::__get_routing('encryptSpot','encrypt_spot',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function enterPlaylistId() {      
        return self::__get_routing('enterPlaylistId','enter_playlist_id',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function showPlaylist() {      
        return self::__get_routing('showPlaylist','show_playlist',func_get_args());
    }
                
    /**
     * This method returns the url to be used inside links.
     *
     * @returns string The url that sends the browser to the location related to this method. 
     */                
    public static function generatePlaylistFile() {      
        return self::__get_routing('generatePlaylistFile','generate_playlist_file',func_get_args());
    }
                                
}
                