<?php

use Illuminate\Database\Seeder;
use Mbcraft\Piol\FileSystemUtils;
use App\Services\Music\AbstractEncryptionService;

class SpotsTableSeeder extends Seeder
{
    private function registerSpot($nome_spot,$player) {
        DB::table("tab_spots")->insert([
            "nome_spot" => $nome_spot,
            "protected_spot_name" => FileSystemUtils::filterPathName($nome_spot.AbstractEncryptionService::getEncryptedFileExtension()),
            "player_id" => $player->id            
        ]);
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        $istanza1 = DB::table("tab_players")->where("id",1)->first();
        
        $nome_spot = "Leggi_una_rivista.aac";
        $this->registerSpot($nome_spot,$istanza1);
        
        $nome_spot = "Scelta_taglio_capelli_da_catalogo.aac";
        $this->registerSpot($nome_spot, $istanza1); 
                
        $nome_spot = "Informaci_di_pruriti_al_collo_e_al_viso.aac";
        $this->registerSpot($nome_spot, $istanza1);
        
        $istanza3 = DB::table("tab_players")->where("id",3)->first();
        
        $nome_spot = "Assaggia_una_caramella.aac";
        $this->registerSpot($nome_spot, $istanza3); 
        
        $nome_spot = "Altri_controlli_ad_automobile.aac";
        $this->registerSpot($nome_spot, $istanza3); 
                
        $istanza4 = DB::table("tab_players")->where("id",4)->first();
              
        $nome_spot = "In_attesa_delle_gomme.aac";
        $this->registerSpot($nome_spot, $istanza4);
        
        $nome_spot = "Riparazione_in_corso.aac";
        $this->registerSpot($nome_spot, $istanza4);    
        
   
                 
    }
}
