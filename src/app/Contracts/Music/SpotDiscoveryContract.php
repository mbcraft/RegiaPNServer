<?php

namespace App\Contracts\Music;

/**
 * Interfaccia relativa al servizio che effettua la ricerca di spot non registrati nel database.
 */
interface SpotDiscoveryContract {
    
    /**
     * Ritorna un array di Spot non registrati nel database (File).
     */
    function findNewSpots();
    
    /**
     * Ritorna true se sono presenti nuovi spot nei dati forniti, false altrimenti.
     */
    function hasNewSpots($spot_data);
    
    /**
     * Registra nel database tutti gli spot non ancora inseriti.
     */
    function registerSpots($spot_data);
    
    /**
     * Riempie gli spot già registrati nel database coi metadati.
     */
    function fillSpotsMetadata();
}