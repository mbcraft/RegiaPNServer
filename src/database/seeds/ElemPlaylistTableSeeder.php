<?php

use Illuminate\Database\Seeder;

class ElemPlaylistTableSeeder extends Seeder
{
    
    public static function canzone_id($name) {
        $o = DB::table("tab_canzoni")->where("nome_canzone",$name)->first();
    
        return $o->id;
    }
    
    public static function spot_id($name) {
        $o = DB::table("tab_spots")->where("nome_spot",$name)->first();
    
        return $o->id;
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        
        $parr_pl = DB::table("tab_playlists")->where("titolo","Playlist parrucchiera last")->first();
        
        DB::table("tab_elem_playlist")->insert([
            "ordine" => 1,
            "playlist_id" => $parr_pl->id,
            "playable_type" => "App\Models\Song",
            "playable_id" => self::canzone_id("001 - Less Than A Pearl.mp3")
        ]);
        
        DB::table("tab_elem_playlist")->insert([
            "ordine" => 2,
            "playlist_id" => $parr_pl->id,
            "playable_type" => "App\Models\Spot",
            "playable_id" => self::spot_id("Leggi_una_rivista.aac")
        ]);
        
        DB::table("tab_elem_playlist")->insert([
            "ordine" => 3,
            "playlist_id" => $parr_pl->id,
            "playable_type" => "App\Models\Song",
            "playable_id" => self::canzone_id("005 - The River Sings.mp3")
        ]);
                        
        DB::table("tab_elem_playlist")->insert([
            "ordine" => 4,
            "playlist_id" => $parr_pl->id,
            "playable_type" => "App\Models\Spot",
            "playable_id" => self::spot_id("Informaci_di_pruriti_al_collo_e_al_viso.aac")
        ]);
               
        $gomm_pl = DB::table("tab_playlists")->where("titolo","Playlist gommista old")->first();
        
        DB::table("tab_elem_playlist")->insert([
            "ordine" => 1,
            "playlist_id" => $gomm_pl->id,
            "playable_type" => "App\Models\Song",
            "playable_id" => self::canzone_id("007 - Sumiregusa.mp3")
        ]);
        
        DB::table("tab_elem_playlist")->insert([
            "ordine" => 2,
            "playlist_id" => $gomm_pl->id,
            "playable_type" => "App\Models\Spot",
            "playable_id" => self::spot_id("Altri_controlli_ad_automobile.aac")
        ]);
                
        DB::table("tab_elem_playlist")->insert([
            "ordine" => 3,
            "playlist_id" => $gomm_pl->id,
            "playable_type" => "App\Models\Song",
            "playable_id" => self::canzone_id("010 - Drifting.mp3")
        ]);
        
        $gomm_pl_ok = DB::table("tab_playlists")->where("titolo","Playlist gommista ok")->first();
       
        DB::table("tab_elem_playlist")->insert([
            "ordine" => 1,
            "playlist_id" => $gomm_pl_ok->id,
            "playable_type" => "App\Models\Song",
            "playable_id" => self::canzone_id("004 - If I Could Be Where You Are.mp3")
        ]);
                
        DB::table("tab_elem_playlist")->insert([
            "ordine" => 2,
            "playlist_id" => $gomm_pl_ok->id,
            "playable_type" => "App\Models\Song",
            "playable_id" => self::canzone_id("009 - A Moment Lost.mp3")
        ]);
        
        DB::table("tab_elem_playlist")->insert([
            "ordine" => 3,
            "playlist_id" => $gomm_pl_ok->id,
            "playable_type" => "App\Models\Spot",
            "playable_id" => self::spot_id("In_attesa_delle_gomme.aac")
        ]);
        
        
        DB::table("tab_elem_playlist")->insert([
            "ordine" => 4,
            "playlist_id" => $gomm_pl_ok->id,
            "playable_type" => "App\Models\Spot",
            "playable_id" => self::spot_id("Riparazione_in_corso.aac")
        ]);
         
         
        
    }
}
