<?php

namespace App\Contracts\Music;

use App\Models\Spot;
/**
 * Interfaccia relativa al servizio per l'encryption degli spot.
 */
interface SpotEncryptionContract {
    
    /**
     * Ritorna uno Spot non crittato, oppure false.
     */
    function getUnencryptedSpot();
    
    /**
     * Effettua l'encryption di uno spot non crittato.
     */
    function encryptSpot(Spot $spot);
    
    
}