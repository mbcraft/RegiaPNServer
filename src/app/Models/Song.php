<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Lang\Songs\LForm;

use App\Services\Music\IServerPaths;

use Mbcraft\Piol\Dir;
use Mbcraft\Laravel\Models\INameable;

class Song extends Model implements IPlayable, INameable
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tab_canzoni';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nome_canzone','album_id','protected_song_name'];

    protected $dates = ['created_at','updated_at'];


    /**
     * Deletes this Song and the associated file(s).
     */
    public function delete() {
        $elem_in_playlists = $this->elements()->get();

        foreach ($elem_in_playlists as $elem) {

            Playlist::playlistChanged($elem->playlist_id);

            $elem->delete();
        }

        if (Playlist::isPlaylistUpdateEnabled())
            Playlist::updateChangedPlaylists();

        //delete song file
        $this->getUnencryptedFile()->delete();

        //delete protected song file
        $this->getEncryptedFile()->delete();

        parent::delete();
    }

    /**
     * Ritorna l'album di questa canzone.
     * 
     * @return Album
     */
    public function album() {       
        return $this->belongsTo('App\Models\Album');
    }

    
    /**
     * Ritorna il nome della cartella dell'album associata a questa canzone.
     * 
     * @return string Il nome della cartella dell'album
     */
    public function getAlbumFolderName() {
        return $this->album()->firstOrFail()->nome_album;
    }

    /**
     * Ritorna il nome della cartella dell'album protetto
     *
     * @return string Il nome della cartella dell'album protetto
     */
    public function getProtectedAlbumFolderName() {
        return $this->album()->firstOrFail()->protected_album_name;
    }
    
    /**
     * Ritorna gli elementi di playlist associati a questa canzone 
     * (una stessa canzone può ovviamente essere presente in diverse playlist
     * o anche nella stessa più di una volta)
     * 
     * @return type
     */
    public function elements() {
        return $this->morphMany('App\Models\ElemPlaylist',"playable");
    }
    
    /**
     * Ritorna il nome della traccia (in questo caso della canzone).
     * 
     * @return string The name of the track
     */
    public function nome_traccia() {
        $result = $this->nome_canzone;
        if ($this->title!=null) {
            $result = $this->title;
        }
        return $result;
    }
    
    /**
     * Ritorna il tipo della traccia
     * 
     * @return string il tipo della traccia (Canzone)
     */
    public function tipo_traccia() {
        return LForm::trackType();
    }

    /**
     * @see INameable::one_entity()
     *
     */
    public static function one_entity() {
        return "song";
    }

    /**
     * @see INameable::many_entities()
     *
     */
    public static function many_entities() {
        return "songs";
    }
    
    /**
     * Ritorna il file della canzone, non crittato.
     * 
     * @return \Mbcraft\Piol\File il file della canzone
     */
    public function getUnencryptedFile() {
        $d = new Dir(IServerPaths::MUSIC_UPLOAD_DIR.IServerPaths::MUSIC_DIRECTORY."/".$this->getAlbumFolderName());
        return $d->newFile($this->nome_canzone);
    }

    /**
     * Ritorna il file della canzone crittata.
     *
     * @return \Mbcraft\Piol\File Il file della canzone crittato
     */
    public function getEncryptedFile()
    {
        $d = new Dir(IServerPaths::MUSIC_DOWNLOAD_DIR.IServerPaths::CRYPTED_MUSIC_DIRECTORY."/".$this->getProtectedAlbumFolderName());
        return $d->newFile($this->getProtectedFilename());
    }

    /**
     * Ritorna il nome della canzone da utilizzare per il file crittato.
     * 
     * @return string Il nome del file protetto.
     */
    public function getProtectedFilename() {
        return $this->protected_song_name;
    }
    
    use HasDurationTrait;
}
