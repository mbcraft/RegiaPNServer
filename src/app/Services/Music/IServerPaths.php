<?php

namespace App\Services\Music;

/**
 * Questa interfaccia contiene i percorsi utilizzati sul server per il
 * salvataggio di files crittati e non.
 */
interface IServerPaths {
        
    const MUSIC_UPLOAD_DIR = "files/upload";
    const MUSIC_DOWNLOAD_DIR = "files/download";
    
    const CLIENTI_UPLOAD_DIR = "files/upload/clienti";
    const CLIENTI_DOWNLOAD_DIR = "files/download/clienti";
    const SOFTWARE_DOWNLOAD_DIR = "files/download/software";
    
    const SPOT_LIST_PATH = "config/spot_list.txt";
    const MUSIC_LIST_PATH = "config/music_list.txt";
    const PLAYLIST_PATH = "config/playlist.xml";
    const CONFIG_PATH = "config/config.xml";
    const SIGNATURE_FILENAME = "update_signature.xml";
    
    const CONFIG_DIRECTORY = "/config";
    const SPOT_DIRECTORY = "/spot";
    const CRYPTED_SPOT_DIRECTORY = "/crypted_spot";
    const MUSIC_DIRECTORY = "/music";
    const CRYPTED_MUSIC_DIRECTORY = "/crypted_music";
}