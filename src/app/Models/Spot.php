<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Lang\Spots\LForm;

use App\Services\Music\IServerPaths;

use Mbcraft\Piol\Dir;
use Mbcraft\Laravel\Models\INameable;

class Spot extends Model implements IPlayable,INameable
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tab_spots';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nome_spot', 'player_id','protected_spot_name'];

    protected $dates = ['created_at','updated_at'];

    /**
     * Deletes this spot and the associated file(s).
     *
     * @return bool|null
     */
    public function delete() {

        //delete element from playlist
        $elem_in_playlists = $this->elements()->get();

        foreach ($elem_in_playlists as $elem) {

            Playlist::playlistChanged($elem->playlist_id);

            $elem->delete();
        }

        if (Playlist::isPlaylistUpdateEnabled())
            Playlist::updateChangedPlaylists();

        //delete spot file
        $this->getUnencryptedFile()->delete();

        //delete protected spot file
        $this->getEncryptedFile()->delete();

        return parent::delete();
    }

    /**
     * Ritorna il player associato a questo spot
     * 
     * @return Player
     */
    public function player() {
        return $this->belongsTo('App\Models\Player');
    }
    
    /**
     * Ritorna il nome del player associato a questo spot.
     * 
     * @return string Il nome del player
     */
    public function getPlayerName() {
        return $this->player()->firstOrFail()->unique_label;
    }
    
    /**
     * Ritorna gli elementi di playlist associati a questo spot 
     * (una stesso spot può ovviamente essere presente in diverse playlist
     * o anche nella stessa più di una volta)
     * @return type
     */
    public function elements() {
        return $this->morphMany('App\Models\ElemPlaylist',"playable");
    }
    
    /**
     * Ritorna il nome della traccia, in questo caso dello spot.
     * 
     * @return string Il nome dello spot.
     */
    public function nome_traccia() {
        $result = $this->nome_spot;
        if ($this->title!=null) {
            $result = $this->title;
        }
        return $result;
    }
    
    /**
     * Ritorna il tipo della traccia.
     * 
     * @return string il tipo della traccia (spot)
     */
    public function tipo_traccia() {
        return LForm::trackType();
    }

    /**
     * @see INameable::one_entity()
     *
     */
    public static function one_entity() {
        return "spot";
    }

    /**
     * @see INameable::many_entities()
     *
     */
    public static function many_entities() {
        return "spots";
    }
    
    /**
     * Ritorna il file dello spot non crittato.
     * 
     * @return \Mbcraft\Piol\File Il file dello spot non crittato.
     */
    public function getUnencryptedFile() {
        $cliente = $this->player()->firstOrFail()->cliente()->firstOrFail();
        $player = $this->player()->firstOrFail();
        $d = new Dir(IServerPaths::CLIENTI_UPLOAD_DIR."/".$cliente->unique_label."/".$player->unique_label.IServerPaths::SPOT_DIRECTORY);        
        return $d->newFile($this->nome_spot);
    }

    /**
     * Ritorna il file dello spot crittato.
     *
     * @return \Mbcraft\Piol\File Il file dello spot crittato.
     */
    public function getEncryptedFile() {
        $cliente = $this->player()->firstOrFail()->cliente()->firstOrFail();
        $player = $this->player()->firstOrFail();
        $d = new Dir(IServerPaths::CLIENTI_DOWNLOAD_DIR."/".$cliente->unique_label."/".$player->unique_label.IServerPaths::CRYPTED_SPOT_DIRECTORY);
        return $d->newFile($this->getProtectedFilename());
    }
    
    /**
     * Ritorna il nome dello spot protetto da crittografia.
     * 
     * @return string Il nome del file protetto.
     */
    public function getProtectedFilename() {
        return $this->protected_spot_name;
    }
    
    use HasDurationTrait;
    
}