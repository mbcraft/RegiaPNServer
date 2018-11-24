<?php

namespace App\Services\Music;

use App\Contracts\Music\AlbumDiscoveryContract;

use Mbcraft\Piol\FileSystemUtils;
use Mbcraft\Piol\Dir;

use App\Models\Album;
use App\Models\Song;

class AlbumDiscoveryService extends AbstractDiscoveryService implements AlbumDiscoveryContract {
        
    
    /**
     * @see AlbumDiscoveryContract::findNewAlbums()
     */
    function findNewAlbums() {
        $result = [];
        
        $m_upload = new Dir(IServerPaths::MUSIC_UPLOAD_DIR);
        $m_upload->touch();
        
        $d = new Dir(IServerPaths::MUSIC_UPLOAD_DIR.IServerPaths::MUSIC_DIRECTORY);
        $d->touch();
        
        $folders = $d->listFolders();
        
        foreach ($folders as $fold) {
            $name = $fold->getName();
            $c = Album::where("nome_album",$name)->count();
            if ($c===0) {
                $result[]=$name;
            }
        }
        return $result;
    }
    
    /**
     * @see AlbumDiscoveryContract::hasNewAlbums($album_names)
     */
    function hasNewAlbums($album_names) {
        return count($album_names)>0;
    }
    
    /**
     * @see AlbumDiscoveryContract::registerAlbums($album_names);
     */
    function registerAlbums($album_names) {
        $registered_songs = 0;
        
        foreach ($album_names as $album_name) {
            //taglio i nomi di album troppo lunghi
            $temp_protected_album_name = FileSystemUtils::filterPathName($album_name);
            if (strlen($temp_protected_album_name>80))
                $protected_album_name = "".rand(100000,999999)."_".substr($temp_protected_album_name,strlen($temp_protected_album_name)-80,80);
            else
                $protected_album_name = $temp_protected_album_name;
            $al = Album::create(["nome_album"=>$album_name,'protected_album_name' => $protected_album_name]);
            
            $d = new Dir(IServerPaths::MUSIC_UPLOAD_DIR.IServerPaths::MUSIC_DIRECTORY."/".$album_name);
            
            $files = $d->listFiles();
            
            foreach ($files as $f) {
                $ext = strtolower($f->getLastExtension());
                if ($this->isTrackExtensionAllowed($ext)) {
                    //taglio i nomi di canzoni troppo lunghi
                    $temp_protected_song_name = FileSystemUtils::filterPathName($f->getFullName().AbstractEncryptionService::getEncryptedFileExtension());
                    if (strlen($temp_protected_song_name>80))
                            $protected_song_name = "".rand(100000,999999)."_".substr($temp_protected_song_name,strlen($temp_protected_song_name)-80,80);
                        else
                            $protected_song_name = $temp_protected_song_name;
                    $c = Song::create(["album_id" => $al->id,"nome_canzone" => $f->getFullName(),"protected_song_name" => $protected_song_name]);
                    $this->fillPlayableWithTrackInfo($c, $f);
                    $registered_songs++;
                }
                else {
                    \Log::debug("File Extension not allowed for file : ".$f->getFullName());
                }
            }
            
            $album_download_dir = new Dir(IServerPaths::MUSIC_DOWNLOAD_DIR.IServerPaths::CRYPTED_MUSIC_DIRECTORY."/".$protected_album_name);
            $album_download_dir->touch();
            
        }
        
        return $registered_songs;
    }

    /**
     * @see AlbumDiscoveryContract::fillAlbumsMetadata();
     */
    function fillAlbumsMetadata() {
        $unfetched_songs = Song::where('metadata_status','NOT_FETCHED')->get();
    
        foreach ($unfetched_songs as $song) {            
            $this->fillPlayableWithTrackInfo($song, $song->getUnencryptedFile());
        }
        
        return count($unfetched_songs);
    }

}