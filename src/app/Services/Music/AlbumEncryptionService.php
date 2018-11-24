<?php

namespace App\Services\Music;

use App\Contracts\Music\AlbumEncryptionContract;

use Mbcraft\Piol\Dir;
use Mbcraft\Piol\File;

use Illuminate\Database\Eloquent\ModelNotFoundException;

use App\Models\Song;



class AlbumEncryptionService extends AbstractEncryptionService implements AlbumEncryptionContract {
       
    /**
     * 
     * @see App\Contracts\AlbumEncryptionContract::unencryptedSongFound();
     */
    function getUnencryptedSong() {
        try {
            return Song::where("crypted",0)->firstOrFail();
        } catch (ModelNotFoundException $ex) {
            return FALSE;
        }
    }
    
    /**
     * 
     * @see App\Contracts\AlbumEncryptionContract::encryptNextSong($canzone);
     */
    function encryptSong(Song $canzone) {
        $album = $canzone->album()->firstOrFail();
        
        $f_source = new File(IServerPaths::MUSIC_UPLOAD_DIR.IServerPaths::MUSIC_DIRECTORY."/".$album->nome_album."/".$canzone->nome_canzone);
        if (config('media.check_song_exists') && !$f_source->exists()) throw new \Exception("Il file della traccia musicale non esiste!! ".$canzone->nome_canzone);
        
        $root_crypted_music_dir = new Dir(IServerPaths::MUSIC_DOWNLOAD_DIR.IServerPaths::CRYPTED_MUSIC_DIRECTORY);
        $root_crypted_music_dir->touch();
        
        $dir_album_crypt = new Dir(IServerPaths::MUSIC_DOWNLOAD_DIR.IServerPaths::CRYPTED_MUSIC_DIRECTORY."/".$album->protected_album_name);
        $dir_album_crypt->touch();
        
        $this->encryptAndSave($dir_album_crypt, $f_source, $canzone);

    }
}