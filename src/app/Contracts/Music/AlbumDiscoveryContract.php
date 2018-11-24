<?php

namespace App\Contracts\Music;

/**
 * Interfaccia relativa al servizio che effettua la ricerca di album non registrati nel database.
 */
interface AlbumDiscoveryContract {
        
    /**
     * Ritorna un array con i nomi degli album da registrare nel database.
     * Il controllo viene effettuato sul filesystem.
     */
    function findNewAlbums();
    
    /**
     * Ritorna true se sono presenti nuovi album da registrare, false altrimenti.
     */
    function hasNewAlbums($album_names);
    /**
     * Registra nel database tutti gli album presenti nell'array.
     */
    function registerAlbums($album_names);
    /**
     * Riempie le canzoni degli album già registrati nel database coi metadati.
     */
    function fillAlbumsMetadata();
}