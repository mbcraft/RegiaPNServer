<?php

use Illuminate\Database\Seeder;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        //cliente id = 1
        $c1 = DB::table("tab_clienti")->where("id",1)->first();
        
        DB::table("tab_players")->insert([
            'cliente_id' => $c1->id,
            'registration_code' => '1234',
            'status' => "UNREGISTERED",
            'unique_label' => "via_tavole",
            'security_token' => '98ds7f89d798f7ds97f',
            'api_password' => "secret123",
            'indirizzo' => "Via delle tavole, 12",
            'cap' => "12124",
            'citta' => "Fantasilandia",
            'provincia' => "Terra delle favole",
            'stato' => "IT",
            'time_zone' => "Europe/Rome",
            'play_start_time' => "10:00",
            'play_end_time' => "20:00",
            'play_end_time_day_offset' => "0",
            'check_play_minutes_interval' => "5",
            'files_update_time' => "02:00",
            'loop_playlist' => true
        ]);
        
        DB::table("tab_players")->insert([
            'cliente_id' => $c1->id,
            'registration_code' => '111222333',
            'status' => "UNREGISTERED",
            'unique_label' => "via_arbusti",
            'security_token' => 'fhd5dsfds87fds9397f',
            'api_password' => "secret456",
            'indirizzo' => "Via degli arbusti, 1",
            'cap' => "43431",
            'citta' => "Arboria",
            'provincia' => "Terra degli alberi",
            'stato' => "IT",
            'time_zone' => "Europe/Rome",
            'play_start_time' => "10:00",
            'play_end_time' => "20:00",
            'play_end_time_day_offset' => "0",
            'check_play_minutes_interval' => "5",
            'files_update_time' => "02:00",
            'loop_playlist' => true
        ]);
        
        //cliente id = 2
        $c2 = DB::table("tab_clienti")->where("id",2)->first();
        
        DB::table("tab_players")->insert([
            'cliente_id' => $c2->id,
            'registration_code' => 'BZXDYT4353',
            'status' => "DELETED",
            'unique_label' => "paludi",
            'security_token' => 'v897r437687f43874',
            'api_password' => "secret098",
            'indirizzo' => "Via delle paludi, 8",
            'cap' => "12443",
            'citta' => "Swampland",
            'provincia' => "Terra degli umidi",
            'stato' => "IT",
            'time_zone' => "Europe/Rome",
            'play_start_time' => "10:00",
            'play_end_time' => "20:00",
            'play_end_time_day_offset' => "0",
            'check_play_minutes_interval' => "5",
            'files_update_time' => "02:00",
            'loop_playlist' => true
        ]);
        
        DB::table("tab_players")->insert([
            'cliente_id' => $c2->id,
            'registration_code' => 'YY3IP1AD559',
            'status' => "LIMITED",
            'unique_label' => "steppe",
            'security_token' => 'd987943ngf438g487gt',
            'api_password' => "secret098",
            'indirizzo' => "Via delle steppe, 3",
            'cap' => "55443",
            'citta' => "Rockland",
            'provincia' => "Terra della musica",
            'stato' => "IT",
            'time_zone' => "Europe/Rome",
            'play_start_time' => "10:00",
            'play_end_time' => "20:00",
            'play_end_time_day_offset' => "0",
            'check_play_minutes_interval' => "5",
            'files_update_time' => "02:00",
            'loop_playlist' => true
        ]);
    }
}
