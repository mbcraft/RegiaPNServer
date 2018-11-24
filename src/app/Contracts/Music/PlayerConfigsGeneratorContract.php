<?php

namespace App\Contracts\Music;

interface PlayerConfigsGeneratorContract {
    
    /**
     * Ritorna true se il player ha esattamente una playlist attiva.
     */
    function hasOneActivePlaylist($player_id);
    
    /**
     * Genera il file della playlist per il player con l'id specificato.
     */
    function generatePlayerPlaylistFile($player_id);
    
    /**
     * Ritorna l'elenco delle tracce musicali per uno specifico player determinato
     * dalla sua playlist.
     */
    function getPlayerMusicList($player_id);
    
    /**
     * Genera l'elenco delle canzoni da scaricare per un determinato player
     */
    function generateMusicListFile($player_id);
    
    /**
     * Genera l'elenco degli spot da scaricare per un determinato player
     */
    function generateSpotListFile($player_id);
    
    /**
     * Genera il file di configurazione del player.
     */
    function generatePlayerConfigFile($player_id);
    
    /**
     * Genera il file di configurazione globale del player.
     */
    function getPlayerGlobalConfigFile($player_id);
        
}