<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Mbcraft\Laravel\Models\INameable;
use Mbcraft\Piol\Dir;
use App\Services\Music\IServerPaths;

class Album extends Model implements INameable
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tab_album';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nome_album','protected_album_name'];
    
    /**
     * Ritorna l'elenco delle canzoni associate a questo Album.
     * 
     * @return mixed L'elenco delle canzoni
     */
    public function songs() {
        return $this->hasMany('App\Models\Song');
    }
    
    /**
     * Ritorna la descrizione di quest'album
     * 
     * @return string La descrizione dell'album (titolo)
     */
    public function getShortDescription() {
        return $this->nome_album;
    }
    
    /**
     * Ritorna la durata totale di tutte le tracce di quest'album
     * 
     * @return string La durata totale dell'album nel formato HH:mm:ss
     */
    public function getDurationInSeconds() {
        $songs = $this->songs()->get();
        $total_seconds = 0;
        foreach ($songs as $s) {
            $total_seconds += $s->getDurationInSeconds();
        }
        return $total_seconds;
    }

    /**
     * Deletes this album and all its songs. All entries from the playlists are
     * also removed.
     */
    public function delete() {

        Playlist::setPlaylistUpdateEnabled(false);

        //when deleting an album, all songs must be removed from all playlists
        $song_list = $this->songs()->get();

        foreach ($song_list as $song) {
            $song->delete();
        }

        Playlist::setPlaylistUpdateEnabled(true);

        Playlist::updateChangedPlaylists();

        //delete the empty album dir
        $album_dir = $this->getAlbumDir();
        if ($album_dir->exists())
            $album_dir->delete();
        else
            \Log::debug('Album dir not found when deleting : '.$album_dir);

        //delete the empty protected album dir
        $protected_album_dir = $this->getProtectedAlbumDir();
        if ($protected_album_dir->exists())
            $protected_album_dir->delete();
        else
            \Log::debug('Protected album dir not found when deleting : '.$protected_album_dir);

        parent::delete();
    }

    /**
     * Returns the path of the Album
     *
     * @return string The path of the album
     */
    public function getAlbumDirPath() {
        return IServerPaths::MUSIC_UPLOAD_DIR.IServerPaths::MUSIC_DIRECTORY.'/'.$this->nome_album;
    }

    /**
     * Returns the directory of the readable album.
     *
     * @return Dir The directory of the album.
     */
    public function getAlbumDir() {
        return new Dir($this->getAlbumDirPath());
    }

    /**
     * Returns the path of the crypted album dir for this album
     *
     * @return string The path of the crypted songs album
     */
    public function getProtectedAlbumDirPath() {
        return IServerPaths::MUSIC_DOWNLOAD_DIR.IServerPaths::CRYPTED_MUSIC_DIRECTORY.'/'.$this->protected_album_name;
    }

    /**
     * Returns the crypted album dir for this album
     *
     * @return Dir The dir of the crypted songs album
     */
    public function getProtectedAlbumDir() {
        return new Dir($this->getProtectedAlbumDirPath());
    }

    /**
     * @see INameable::one_entity()
     *
     */
    public static function one_entity() {
        return "album";
    }

    /**
     * @see INameable::many_entities()
     *
     */
    public static function many_entities() {
        return "albums";
    }
    
    use HasTotalDurationTrait;

}
