<?php

use Illuminate\Database\Seeder;

class PlaylistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        
        $p1 = DB::table("tab_players")->where("id",1)->first();
        
        DB::table("tab_playlists")->insert([
            "titolo" => "Playlist parrucchiera last",
            "stato" => "ACTIVE",
            "player_id" => $p1->id
        ]);
        
        $p3 = DB::table("tab_players")->where("id",3)->first();
        
        DB::table("tab_playlists")->insert([
            "titolo" => "Playlist gommista old",
            "stato" => "NOT_ACTIVE",
            "player_id" => $p3->id
        ]);
        
        $p4 = DB::table("tab_players")->where("id",4)->first();
        
        DB::table("tab_playlists")->insert([
            "titolo" => "Playlist gommista ok",
            "stato" => "WORK_IN_PROGRESS",
            "player_id" => $p4->id
        ]);
         
         
    }
}
