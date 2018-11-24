<?php

namespace App\Services\Music;

use App\Contracts\Music\SpotEncryptionContract;

use Illuminate\Database\Eloquent\ModelNotFoundException;

use App\Models\Spot;

use Mbcraft\Piol\Dir;
use Mbcraft\Piol\File;

class SpotEncryptionService extends AbstractEncryptionService implements SpotEncryptionContract {
        
    function getUnencryptedSpot() {
        try {
            return Spot::where("crypted",0)->firstOrFail();
        }
        catch (ModelNotFoundException $ex) {
            return FALSE;
        }
    }
    
    function encryptSpot(Spot $spot) {
        
        $player =  $spot->player()->firstOrFail();
        $cliente = $player->cliente()->firstOrFail();
        //leggo con unique label
        $f_source = new File(IServerPaths::CLIENTI_UPLOAD_DIR."/".$cliente->unique_label."/".$player->unique_label.IServerPaths::SPOT_DIRECTORY."/".$spot->nome_spot);
        if (config('media.check_spot_exists') && !$f_source->exists()) throw new \Exception("Il file dello spot non esiste!!");

        //salvo con id -> ok
        $dir_crypted_spot = new Dir(IServerPaths::CLIENTI_DOWNLOAD_DIR."/".$cliente->id."/".$player->id.IServerPaths::CRYPTED_SPOT_DIRECTORY."/");

        $this->encryptAndSave($dir_crypted_spot, $f_source, $spot);
    }
}