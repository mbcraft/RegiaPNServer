<?php

use Illuminate\Database\Seeder;
use Mbcraft\Piol\FileSystemUtils;
use App\Services\Music\AbstractEncryptionService;

class CanzoniTableSeeder extends Seeder
{
    private function registerSong($nome_canzone,$album) {
        DB::table('tab_canzoni')->insert([
            'nome_canzone' => $nome_canzone,
            'protected_song_name' => FileSystemUtils::filterPathName($nome_canzone.AbstractEncryptionService::getEncryptedFileExtension()),
            'album_id' => $album->id
        ]);
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {      
        
        $enya = DB::table('tab_album')->where("nome_album","Enya - Amarantine")->first();
        
        $nome_canzone = "001 - Less Than A Pearl.mp3";
        $this->registerSong($nome_canzone,$enya);
        
        $nome_canzone = "002 - Amarantine.mp3";
        $this->registerSong($nome_canzone,$enya);
                
        $nome_canzone = "003 - It's In The Rain.mp3";
        $this->registerSong($nome_canzone,$enya);
                      
        $nome_canzone = "004 - If I Could Be Where You Are.mp3";
        $this->registerSong($nome_canzone,$enya);
        
        $nome_canzone = "005 - The River Sings.mp3";
        $this->registerSong($nome_canzone,$enya);
                
        $nome_canzone = "006 - Long Long Journey.mp3";
        $this->registerSong($nome_canzone,$enya);
                    
        $nome_canzone = "007 - Sumiregusa.mp3";
        $this->registerSong($nome_canzone,$enya);
        
        $nome_canzone = "008 - Somebody Said Goodbye.mp3";
        $this->registerSong($nome_canzone,$enya);
                
        $nome_canzone = "009 - A Moment Lost.mp3";
        $this->registerSong($nome_canzone,$enya);
                        
        $nome_canzone = "010 - Drifting.mp3";
        $this->registerSong($nome_canzone,$enya);
        
        
        /*
        $p_tree = DB::table('tab_album')->where("nome_album","Porcupine_Tree___In_Absentia")->first();
        
        DB::table('tab_canzoni')->insert([
            'nome_canzone' => "01__Blackest_Eyes.mp3",
            'album_id' => $p_tree->id
        ]);
        
        DB::table('tab_canzoni')->insert([
            'nome_canzone' => "02__Trains.mp3",
            'album_id' => $p_tree->id
        ]);
                
        DB::table('tab_canzoni')->insert([
            'nome_canzone' => "03__Lips_Of_Ashes.mp3",
            'album_id' => $p_tree->id
        ]);
        
        DB::table('tab_canzoni')->insert([
            'nome_canzone' => "04__The_Sound_Of_Muzak.mp3",
            'album_id' => $p_tree->id
        ]);
                
        DB::table('tab_canzoni')->insert([
            'nome_canzone' => "05__Gravity_Eyelids.mp3",
            'album_id' => $p_tree->id
        ]);
                        
        DB::table('tab_canzoni')->insert([
            'nome_canzone' => "06__Wedding_Nails.mp3",
            'album_id' => $p_tree->id
        ]);
        
        DB::table('tab_canzoni')->insert([
            'nome_canzone' => "07__Prodigal.mp3",
            'album_id' => $p_tree->id
        ]);
         
        */
    }
}
