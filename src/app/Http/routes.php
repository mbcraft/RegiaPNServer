<?php

use Mbcraft\Laravel\Http\RouteHelper;

RouteHelper::init($this);
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/' , ['middleware' => ['guest'],'as' => 'home','uses' => 'GuestPagesController@getHome']);

Route::get('/credits', ['middleware' => ['guest'],'as' => 'credits', 'uses' => 'GuestPagesController@getCredits']);


//admin login
Route::group(['namespace' => 'Admin','prefix' => 'admin'], function() {
   # Admin Login and Logout
    Route::get('login',['as' => 'admin/login','uses' => 'AuthController@getLogin']);
    Route::post('login', ['uses' => 'AuthController@postLogin']);
    Route::get('logout', ['as' => 'logout', 'uses' => 'AuthController@getLogout']); 
    Route::get('forgot_password', ['middleware' => ['guest'],'as' => 'admin/forgot_password', 'uses' => 'AuthController@getForgotPassword']);
    Route::post('forgot_password', ['uses' => 'AuthController@postForgotPassword']);
});

// Questa route non ha controlli in quanto consente il download degli aggiornamenti per i player anche senza login
Route::get('/download/player_updates/{playerId}/{protectedFolderName}',['as' => 'download_player_update', 'uses' => 'Admin\PlayersController@getUpdatePackage']);


Route::group(['namespace' => 'Admin','middleware' => 'auth','prefix' => 'admin'], function() {
    
    # Dashboard
    Route::get('/', array('as' => 'dashboard', 'uses' => 'PagesController@showHome'));
    
    # User Management (User)
    RouteHelper::declareGuardedEntityManagement('user','users','Users',  RouteHelper::getAllOperationsMask(),'admin');
        
    # Customers Management (Clienti)
    RouteHelper::declareGuardedEntityManagement('customer', 'customers', "Customers", RouteHelper::getAllOperationsMask(),'admin',function($singular, $plural, $controller_strict_name, $operation_mask, $operation_names_prefix) {
        Route::get('{'.$singular.'Id}/players',array('as' => $operation_names_prefix.$plural.'.players','uses' => $controller_strict_name.'Controller@getPlayers'));
    });
    
    # Players Management (Player)
    RouteHelper::declareGuardedEntityManagement('player', 'players', "Players", RouteHelper::getAllOperationsMask(),'admin',function($singular, $plural, $controller_strict_name, $operation_mask, $operation_names_prefix) {
        Route::post('{'.$singular.'Id}/generate_update_package',array('as' => $operation_names_prefix.$plural.'.generate_update_package','uses' => $controller_strict_name.'Controller@postGenerateUpdatePackage'));
        
        Route::get('{'.$singular.'Id}/spots',array('as' => $operation_names_prefix.$plural.'.spots','uses' => $controller_strict_name.'Controller@getSpots'));
        Route::get('{'.$singular.'Id}/playlists',array('as' => $operation_names_prefix.$plural.'.playlists','uses' => $controller_strict_name.'Controller@getPlaylists'));    
        Route::get('{'.$singular.'Id}/player_notifications',array('as' => $operation_names_prefix.$plural.'.player_notifications','uses' => $controller_strict_name.'Controller@getPlayerNotifications'));            
    });
    
    # Playlists Management (Playlist)
    RouteHelper::declareGuardedEntityManagement('playlist', 'playlists', "Playlists", RouteHelper::getAllOperationsNoRestoreMask(),'admin');
        
    # Spots Management (Spots)
    RouteHelper::declareGuardedEntityManagement('spot', 'spots', "Spots", RouteHelper::getAllReadAndDeleteOperationsMask(),'admin');
    
    # Settings Management (Configs)
    RouteHelper::declareGuardedEntityManagement('setting','settings',"Settings",RouteHelper::getAllReadAndEditOperationsMask(),'admin');

    # Albums Management (Albums)
    RouteHelper::declareGuardedEntityManagement('album', 'albums', "Albums", RouteHelper::getAllReadAndDeleteOperationsMask(),'admin');

    # Songs Management (Songs)
    RouteHelper::declareGuardedEntityManagement('song', 'songs', "Songs", RouteHelper::getAllReadAndDeleteOperationsMask(),'admin');
        
    # System Notifications Management (SystemNotification)
    RouteHelper::declareGuardedEntityManagement('system_notification', 'system_notifications', "SystemNotifications", RouteHelper::getAllReadAndDeleteOperationsMask(),'admin');
    Route::post('/system_notifications/readed',['as' => 'admin.system_notifications.readed.do','uses' => 'SystemNotificationsController@postReaded']);
    Route::post('/system_notifications/deleteAllReaded',['as' => 'admin.system_notifications.delete_all_readed.do','uses' => 'SystemNotificationsController@postDeleteAllReaded']);


    # Player Notifications Management (PlayerNotification)
    RouteHelper::declareGuardedEntityManagement('player_notification', 'player_notifications', "PlayerNotifications", RouteHelper::getAllReadAndDeleteOperationsMask(),'admin');
    Route::post('/player_notifications/readed',['as' => 'admin.player_notifications.readed.do','uses' => 'PlayerNotificationsController@postReaded']);
    Route::post('/player_notifications/deleteAllReaded',['as' => 'admin.player_notifications.delete_all_readed.do','uses' => 'PlayerNotificationsController@postDeleteAllReaded']);


    # System custom actions are put here
    Route::group(["prefix" => "system"], function(){
       Route::get('operations',['as' => 'admin.system.operations', 'uses' => 'SystemController@getOperations']);
       Route::post('toggle_background_scanning_and_encoding',['as' => 'admin.system.toggle_background_scanning_and_encoding.do', 'uses' => 'SystemController@postToggleBackgroundScanningAndEncoding']);
        Route::post('scan',['as' => 'admin.system.scan.do', 'uses' => 'SystemController@postScan']);
    });
    
});

//remote api
Route::group(["prefix" => "api", "namespace" => "Api"], function() {
    //API v1.0
    Route::group(["prefix" => "v1_0","namespace" => "v1_0"], function() {
        //player notifications
        Route::group(["prefix"=> "notify"],function() {
            //errors
            Route::post("error",['as' => 'error','uses' => 'NotificationsController@postError']);
            //new instance registration
            Route::post("register_instance",['as' => 'register_new_instance','uses' => 'NotificationsController@postRegisterInstance']);
            //instance started
            Route::post("instance_started",['as' => 'instance_started','uses' => 'NotificationsController@postInstanceStarted']);
            //media player start and stop
            Route::post("service_started",['as' => 'service_started','uses' => 'NotificationsController@postServiceStarted']);
            Route::post("service_stopped",['as' => 'service_stopped','uses' => 'NotificationsController@postServiceStopped']);
            //update start and completed
            Route::post("update_started",['as' => 'update_started','uses' => 'NotificationsController@postUpdateStarted']);
            Route::post("update_completed",['as' => 'update_completed','uses' => 'NotificationsController@postUpdateCompleted']);
        
        });
        
        //updates
        Route::group(["prefix" => "update"],function() {
            //checks if a new update is available
            Route::get("check",['as' => 'check', 'uses' => 'UpdatesController@getCheckForUpdates']);
            //request update
            Route::post("request",['as' => 'request', 'uses' => 'UpdatesController@postUpdateRequest']);
            //download update
            Route::post("download",['as' => 'download', 'uses' => 'UpdatesController@postUpdateDownload']);
        });

        //jobs
        Route::group(["prefix" => "jobs"],function() {
            //executes a timed ~40 secs scanning and encoding for songs or spots
            Route::post("timed_scan_and_encode",["as" => "timed_scan_and_encode", 'uses' => 'JobsController@postTimedScanAndEncode']);
        });

        //access
        Route::group(["prefix" => "access"],function() {
            //returns the ftp access credentials for the authenticated user
            Route::post("get_ftp_login_tokens",["as" => "ftp_auth", 'uses' => 'AccessController@postGetFtpLoginTokens']);
        });
    });
});