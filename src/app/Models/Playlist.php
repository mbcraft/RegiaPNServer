<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ElemPlaylist;
use Mbcraft\Laravel\Models\INameable;

class Playlist extends Model implements INameable
{

    protected static $changed = array();
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tab_playlists';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['titolo','tipo','note','player_id'];

    protected $dates = ['created_at','updated_at'];

    static $update_playlist_enabled = true;

    /**
     * Called when a playlist is changed to record that should be updated when all changes are done.
     *
     * @param $playlist_id The id of the changed playlist.
     */
    static function playlistChanged($playlist_id) {
        self::$changed[] = $playlist_id;
    }

    /**
     * Returns a value indicating if this playlist should be updated after operations
     * on it.
     *
     * @return bool True if this playlist should be updated after changes on it, false otherwise
     */
    static function isPlaylistUpdateEnabled() {
        return self::$update_playlist_enabled;
    }

    /**
     * Sets to update the playlist after a track delete
     *
     * @param $enabled true if the playlists must be updated, false otherwise
     */
    static function setPlaylistUpdateEnabled($enabled) {
        self::$update_playlist_enabled = $enabled;
    }

    /**
     * Updated all changed playlist changed by track deletion
     */
    static function updateChangedPlaylists() {

        $unique_changed_playlist = array_unique(self::$changed);

        foreach ($unique_changed_playlist as $changed_pl) {
            $elements_to_compact = $result = ElemPlaylist::where("playlist_id",$changed_pl)->orderBy("ordine")->get();
            $order = 1;
            foreach ($elements_to_compact as $elem) {
                $elem->ordine = $order++;
                $elem->save();
            }
        }

        self::$changed = array();
    }

    /**
     * Creates a new initialized playlist for the given player
     *
     * @param $player_id The player to which this playlist belong to
     * @return Playlist The resulting playlist
     */
    static function newEmpty($player_id) {
        $p = new Playlist();
        $p->player_id = $player_id;
        $p->stato = 'WORK_IN_PROGRESS';
        return $p;
    }
    /**
     * Metodo hasMany per avere l'elenco degli elementi ordinati.
     * 
     * @return Collection Una collection di ElemPlaylist ordinati
     */
    public function scopeOrderedElements() {
        $result = ElemPlaylist::where("playlist_id",$this->id)->orderBy("ordine")->get(); 
        $converted_result = [];
        foreach ($result as $trk) {
            $converted_result[] = $trk->playable()->firstOrFail();
        }
        return $converted_result;
    }
    
    /**
     * Ritorna il player a cui è agganciata questa playlist.
     * 
     * @return App\Models\Player il player di questa playlist.
     */
    public function player() {
        return $this->belongsTo('App\Models\Player');
    }
    
    /**
     * Ritorna una descrizione del player a cui è agganciata questa playlist.
     * 
     * @return string Una descrizione sommaria di questo player.
     */
    public function getPlayerDescription() {
        $p = $this->player();
        return $p->unique_label." - ".$p->indirizzo." - ".$p->citta;
    }
    
    /**
     * Ritorna una descrizione del cliente del player di questa playlist.
     * 
     * @return string Una descrizione sommaria del cliente.
     */
    public function getClienteDescription() {
        return $this->player()->getClienteDescription();
    }

    /**
     * @see INameable::one_entity()
     *
     */
    public static function one_entity() {
        return "playlist";
    }

    /**
     * @see INameable::many_entities()
     *
     */
    public static function many_entities() {
        return "playlists";
    }

    /**
     * Returns the total duration of this playlist.
     *
     * @return int The total duration of this playlist, in seconds.
     */
    public function getDurationInSeconds() {
        $tracks = $this->orderedElements();
        $total_seconds = 0;
        foreach ($tracks as $trk) {
            
            $total_seconds += $trk->getDurationInSeconds();
        }
        return $total_seconds;
    }

    /**
     * Deletes this playlist and all its elements.
     */
    public function delete() {

        $elements = $this->orderedElements();
        foreach ($elements as $elem)
        {
            $elem->delete();
        }

        parent::delete();
    }
    
    use HasTotalDurationTrait;

}
