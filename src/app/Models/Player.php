<?php

namespace App\Models;

use App\Services\Music\IGlobalConfiguration;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Mbcraft\Laravel\Database\SoftDeletesCascade;

use Mbcraft\Piol\Dir;
use Mbcraft\Piol\File;
use App\Models\Update;

use App\Lang\Players\LForm;

use App\Services\Music\IServerPaths;
use Mbcraft\Laravel\Models\INameable;

class Player extends Model implements INameable {

    use SoftDeletes;
    use SoftDeletesCascade;

    use WithDefaultTimeZoneTrait;
    use WithDefaultCountryTrait;
    
    protected $softCascades = ["spots","notifications","playlists"];

    protected $dates = ['created_at','updated_at'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tab_players';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        ];

    /**
     * @see INameable::one_entity()
     *
     */
    public static function one_entity() {
        return "player";
    }

    /**
     * @see INameable::many_entities()
     *
     */
    public static function many_entities() {
        return "players";
    }
    
    /**
     * Ritorna il cliente associato a questo Player.
     * 
     * @return Cliente
     * 
     */
    public function cliente() {
        return $this->belongsTo('App\Models\Cliente');
    }

    /**
     * Ritorna una descrizione del cliente a cui è agganciato questo player.
     * 
     * @return string una descrizione
     */
    public function getClienteDescription() {
        $c = $this->cliente();
        return $c->nome . " " . $c->cognome . " - " . $c->ragione_sociale;
    }

    /**
     * Ritorna gli Spot associati a questo player.
     * 
     * @return mixed L'elenco degli spot
     * 
     */
    public function spots() {
        return $this->hasMany('App\Models\Spot');
    }

    /**
     * Ritorna le Playlist associate a questo player.
     * 
     * @return mixed L'elenco delle playlist.
     */
    public function playlists() {
        return $this->hasMany('App\Models\Playlist');
    }

    /**
     * Ritorna l'elenco delle notifiche ricevute per questo player.
     * 
     * @return array L'elenco di PlayerNotification
     */
    public function notifications() {
        return $this->hasMany('App\Models\PlayerNotification');
    }

    /**
     * Ritorna lo stato di attivazione di questo player.
     * 
     * @return boolean true se il player risulta attivo, false altrimenti.
     */
    public function isActive() {
        return $this->status === "ACTIVE" && !$this->trashed();
    }

    /**
     * Controlla lo stato di registrazione del player.
     * 
     * @return boolean true se il player non è registrato, false altrimenti
     */
    public function isRegistered() {
        return $this->status !== "UNREGISTERED";
    }

    /**
     * Ritorna la possibilità di usare il player, se già attivo o attivabile.
     * 
     * @return boolean true se il player è utilizzabile, false altrimenti
     */
    public function isActiveOrActivable() {
        return !$this->trashed() && ($this->isActive() || $this->needsActivation());
    }

    /**
     * Funzione da utilizzare per sapere se questo player deve essere ATTIVATO.
     * 
     * @return boolean true se deve essere attivato, false altrimenti.
     */
    public function needsActivation() {
        return !$this->trashed() && ($this->status === "UNREGISTERED");
    }

    /**
     * Ritorna il nome descrittivo per questo player
     * 
     * @param int $player_id L'id di questo player
     */
    public static function getShortDescriptionById($player_id) {
        $p = Player::findOrFail($player_id);
        $c = $p->cliente()->firstOrFail();
        return $p->unique_label." [".$c->unique_label."]";
    }
    
    /**
     * Verifica se esiste un player non registrato col codice specificato
     * 
     * @param string $code Il codice di registrazione
     * @return boolean true se il player con questo registration code esiste e non è stato registrato, false altrimenti
     */
    public static function hasRegistrationCode($code) {
        return Player::where("registration_code", $code)->where('status', 'UNREGISTERED')->count() == 1;
    }

    /**
     * Ritorna un player non registrato dato il suo codice di registrazione
     * 
     * @param string $code Il codice di registrazione
     * @return App\Models\Player Il player
     */
    public static function getByRegistrationCode($code) {
        return Player::where("registration_code", $code)->where('status', 'UNREGISTERED')->firstOrFail();
    }
    
    /**
     * Returns the directory of the last software update.
     * 
     * @return \Mbcraft\Piol\Dir The root directory of the software update
     */
    public function getLastSoftwareUpdateDirectory() {
        $dirs = $this->getSoftwareUpdateVersionsDirectory()->listFolders();
        
        $greatest_version = "0.0.0";
        $last_version_dir = null;
        
        foreach ($dirs as $d) {
            if (version_compare($greatest_version, $d->getName())<0) {
                $greatest_version = $d->getName();
                $last_version_dir = $d;
            }
        }
        
        return $last_version_dir;
    }
    
    /**
     * Ritorna la directory che contiene le versioni del software utilizzato da un player.
     * 
     * @return \Mbcraft\Piol\Dir La directory che contiene le versioni del software presente nel player
     */
    private function getSoftwareUpdateVersionsDirectory() {
        
        if (empty($this->software_name) || empty($this->software_version) || empty($this->software_vendor)) {
            throw new \Exception("Software name, version or vendor is not specified for the player with id ".$this->id." !!!");
        }
        
        $software_dir_name = str_replace(" ", "_", $this->software_name);
        
        $result = new Dir(IServerPaths::SOFTWARE_DOWNLOAD_DIR . "/" . $this->software_vendor . "/" . $software_dir_name . "/");

        if (!$result->exists()) {
            throw new \Exception("Directory for software does not exist!");
        }
        
        \Log::debug("Software versions directory is : ".$result->getPath());
        
        return $result;
    }
    
    /**
     * Controlla se è disponibile una nuova versione del software per il player.
     * 
     * @return boolean true se è presente una nuova versione del software per il player, false altrimenti
     * 
     */
    public function hasSoftwareUpdateAvailable() {
        //player config
        $software_dir = $this->getSoftwareUpdateVersionsDirectory();
        
        $versions = $software_dir->listFolders();
        
        \Log::debug("Versions available : ".var_export($versions,true));
        
        foreach ($versions as $ver) {
            $ver_name = $ver->getName();
            if (version_compare($this->software_version, $ver_name)<0) {
                return true;
            }
        }
        
        return false;
    }

    /**
     * Adds a random registration code to this player model
     *
     * @return $this Returns this model with a generated registration code
     */
    public function withNewPasswordApi() {
        $passwd = str_pad(dechex(rand(0,65535)), 4,"0", STR_PAD_LEFT);
        $passwd = $passwd.str_pad(dechex(rand(0,65535)), 4,"0", STR_PAD_LEFT);
        $passwd = $passwd.str_pad(dechex(rand(0,65535)), 4,"0", STR_PAD_LEFT);
        $passwd = $passwd.str_pad(dechex(rand(0,65535)), 4,"0", STR_PAD_LEFT);
        $this->api_password = $passwd;
        return $this;
    }

    /**
     * Marks this player as a new update is available.
     */
    public function newUpdateAvailable() {
        $up = Update::create(["player_id" => $this->id]);
        $this->last_update_id = $up->id;
        $this->update_downloaded = false;
        $this->save();
    }

    /**
     * Returns the description of the current allowed playlists dj (All or user name).
     *
     * @return string The description of the playlists dj, or "All" if no dj is selected.
     */
    public function getPlaylistsDjDescription() {
        if ($this->playlists_dj_id==null) return LForm::playlistsDj_placeholder();
        else {
            $user = \App\Models\Auth\User::findOrFail($this->playlists_dj_id);
            return $user->first_name." ".$user->last_name;
        }
    }

}
