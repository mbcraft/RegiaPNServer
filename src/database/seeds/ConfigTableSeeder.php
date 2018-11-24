<?php

use Illuminate\Database\Seeder;

use App\Services\Music\IGlobalConfiguration;
use App\Services\Music\IPlayerConfiguration;

class ConfigTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //default values for global and player xml config files.
        
        DB::table('tab_configs')->insert([
            "key" => IGlobalConfiguration::HTTP_ROOT_KEY,
            "value" => "data/http_root/",
            "context" => IGlobalConfiguration::CONTEXT,
            "editable" => true
        ]);
                 
        DB::table('tab_configs')->insert([
            "key" => IGlobalConfiguration::PLAYLIST_PATH_KEY,
            "value" => "data/config/playlist.xml",
            "context" => IGlobalConfiguration::CONTEXT,
            "editable" => false
        ]);
        
        DB::table('tab_configs')->insert([
            "key" => IGlobalConfiguration::CONFIG_PATH_KEY,
            "value" => "data/config/config.xml",
            "context" => IGlobalConfiguration::CONTEXT,
            "editable" => false
        ]);
        
        DB::table('tab_configs')->insert([
            "key" => IGlobalConfiguration::OVERRIDE_GLOBAL_CONFIG_PATH_KEY,
            "value" => "data/config/global.xml",
            "context" => IGlobalConfiguration::CONTEXT,
            "editable" => false
        ]);
        
        DB::table('tab_configs')->insert([
            "key" => IGlobalConfiguration::UPDATE_REMOTE_HOST_KEY,
            "value" => "local__regiapn",
            "context" => IGlobalConfiguration::CONTEXT,
            "editable" => true
        ]);

        DB::table('tab_configs')->insert([
            "key" => IGlobalConfiguration::UPDATE_CHECK_ADDRESS_KEY,
            "value" => "/api/v1_0/update/check",
            "context" => IGlobalConfiguration::CONTEXT,
            "editable" => false
        ]);
        
        DB::table('tab_configs')->insert([
            "key" => IGlobalConfiguration::UPDATE_REQUEST_ADDRESS_KEY,
            "value" => "/api/v1_0/update/request",
            "context" => IGlobalConfiguration::CONTEXT,
            "editable" => false
        ]);
                
        DB::table('tab_configs')->insert([
            "key" => IGlobalConfiguration::UPDATE_DOWNLOAD_ADDRESS_KEY,
            "value" => "/api/v1_0/update/download",
            "context" => IGlobalConfiguration::CONTEXT,
            "editable" => false
        ]);
        
        DB::table('tab_configs')->insert([
            "key" => IGlobalConfiguration::INSTANCE_STARTED_NOTIFICATION_ADDRESS_KEY,
            "value" => "/api/v1_0/notify/instance_started",
            "context" => IGlobalConfiguration::CONTEXT,
            "editable" => true
        ]);
                
        DB::table('tab_configs')->insert([
            "key" => IGlobalConfiguration::SERVICE_STARTED_NOTIFICATION_ADDRESS_KEY,
            "value" => "/api/v1_0/notify/service_started",
            "context" => IGlobalConfiguration::CONTEXT,
            "editable" => true
        ]);
        
        DB::table('tab_configs')->insert([
            "key" => IGlobalConfiguration::SERVICE_STOPPED_NOTIFICATION_ADDRESS_KEY,
            "value" => "/api/v1_0/notify/service_stopped",
            "context" => IGlobalConfiguration::CONTEXT,
            "editable" => true
        ]);
                        
        DB::table('tab_configs')->insert([
            "key" => IGlobalConfiguration::UPDATE_STARTED_NOTIFICATION_ADDRESS_KEY,
            "value" => "/api/v1_0/notify/update_started",
            "context" => IGlobalConfiguration::CONTEXT,
            "editable" => true
        ]);
        
        DB::table('tab_configs')->insert([
            "key" => IGlobalConfiguration::UPDATE_COMPLETED_NOTIFICATION_ADDRESS_KEY,
            "value" => "/api/v1_0/notify/update_completed",
            "context" => IGlobalConfiguration::CONTEXT,
            "editable" => true
        ]);
        
        //default values for new instances
        
        DB::table('tab_configs')->insert([
            "key" => IPlayerConfiguration::TIME_ZONE_KEY,
            "value" => "Europe/Rome",
            "context" => IPlayerConfiguration::CONTEXT,
            "editable" => true
        ]);
        
        DB::table('tab_configs')->insert([
            "key" => IPlayerConfiguration::PLAY_START_TIME_KEY,
            "value" => "09:00",
            "context" => IPlayerConfiguration::CONTEXT,
            "editable" => true
        ]);
                
        DB::table('tab_configs')->insert([
            "key" => IPlayerConfiguration::PLAY_END_TIME_KEY,
            "value" => "18:00",
            "context" => IPlayerConfiguration::CONTEXT,
            "editable" => true
        ]);
                        
        DB::table('tab_configs')->insert([
            "key" => IPlayerConfiguration::PLAY_END_TIME_DAY_OFFSET_KEY,
            "value" => 0,
            "context" => IPlayerConfiguration::CONTEXT,
            "editable" => true
        ]);
        
        DB::table('tab_configs')->insert([
            "key" => IPlayerConfiguration::CHECK_PLAY_MINUTES_INTERVAL_KEY,
            "value" => 2,
            "context" => IPlayerConfiguration::CONTEXT,
            "editable" => true
        ]);
                
        DB::table('tab_configs')->insert([
            "key" => IPlayerConfiguration::FILES_UPDATE_TIME_KEY,
            "value" => "02:00",
            "context" => IPlayerConfiguration::CONTEXT,
            "editable" => true
        ]);
                
        DB::table('tab_configs')->insert([
            "key" => IPlayerConfiguration::DEFAULT_UNIQUE_LABEL_KEY,
            "value" => "nuovo_player",
            "context" => IPlayerConfiguration::CONTEXT,
            "editable" => true
        ]);

        DB::table('tab_configs')->insert([
            "key" => IGlobalConfiguration::MODULES_DIFF_SPECIFICATION_KEY,
            "value" => "music=data/http_root/music,spot=data/http_root/spot",
            "context" => IGlobalConfiguration::CONTEXT,
            "editable" => true
        ]);

        DB::table('tab_configs')->insert([
            "key" => IGlobalConfiguration::BACKGROUND_SCAN_AND_ENCODING_ENABLED_KEY,
            "value" => 0,
            "context" => IGlobalConfiguration::CONTEXT,
            "editable" => true
        ]);

        DB::table('tab_configs')->insert([
            "key" => IGlobalConfiguration::DEFAULT_COUNTRY_KEY,
            "value" => "IT",
            "context" => IGlobalConfiguration::CONTEXT,
            "editable" => true
        ]);

        DB::table('tab_configs')->insert([
            "key" => IGlobalConfiguration::DEFAULT_TIME_ZONE_KEY,
            "value" => "Europe/Rome",
            "context" => IGlobalConfiguration::CONTEXT,
            "editable" => true
        ]);
        
        
    }
}
