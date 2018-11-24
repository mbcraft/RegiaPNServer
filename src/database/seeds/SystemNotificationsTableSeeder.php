<?php

use Illuminate\Database\Seeder;

class SystemNotificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("tab_system_notifications")->insert([
            'message' => 'The user xyz has just logged in.',
            'type' => 'INFO'
        ]);
        
        DB::table("tab_system_notifications")->insert([
            'message' => 'A new player has been added manually.',
            'type' => 'WARNING'
            
        ]);
        
        DB::table("tab_system_notifications")->insert([
            'message' => 'There was an error during save of the playlist.',
            'type' => 'ERROR'
        ]);
        
        DB::table("tab_system_notifications")->insert([
            'message' => 'Remote players configurations regenerated.',
            'type' => 'DEBUG'
        ]);
    }
}
