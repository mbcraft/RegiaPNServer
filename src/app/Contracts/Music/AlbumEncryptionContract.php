<?php

namespace App\Contracts\Music;

use App\Models\Song;
/**
 * Interfaccia relativa al servizio che effettua l'encryption delle canzoni.
 */
interface AlbumEncryptionContract {
    
    /**
     * Ritorna una canzone non crittata, oppure false.
     */
    function getUnencryptedSong();
    
    /**
     * Effettua l'encryption di una canzone non crittata.
     */
    function encryptSong(Song $canzone);
}