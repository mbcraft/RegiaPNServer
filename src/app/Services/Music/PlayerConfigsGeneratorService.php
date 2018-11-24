<?php

namespace App\Services\Music;

use App\Contracts\Music\PlayerConfigsGeneratorContract;

use Mbcraft\Piol\Dir;
use Mbcraft\Piol\File;

use Mbcraft\Xml\XmlBuilder;

use App\Models\Playlist;
use App\Models\Player;
use App\Models\Album;
use App\Models\Song;
use App\Models\Config;
use Mbcraft\Piol\Utils\JavaXmlPropertiesUtils;

/**
 * Questo servizio si occupa di generare i file di configurazione per il player
 * (playlist, config, elenco tracce musicali da scaricare ed elenco spot da scaricare).
 */
class PlayerConfigsGeneratorService implements PlayerConfigsGeneratorContract {

    /**
     * Controlla se un player ha esattamente una playlist allo stato ACTIVE.
     * 
     * @param type $player_id L'id del player da controllare.
     * @return boolean true se c'è una playlist attiva, false altrimenti (non ce ne sono).
     * @throws Exception Se più di una playlist risulta attiva.
     */
    function hasOneActivePlaylist($player_id) {

        $playlist_count = Playlist::where("player_id", $player_id)->where("stato", 'ACTIVE')->count();

        if ($playlist_count > 1)
            throw new Exception("Non può esserci più di una playlist attiva.");

        return $playlist_count === 1;
    }

    /**
     * Ritorna l'unica playlist attiva per un determinato player.
     * 
     * @param integer $player_id L'id del player
     * @return App\Models\Playlist La playlist
     */
    private function getUniqueActivePlaylist($player_id) {
        return Playlist::where("player_id", $player_id)->where("stato", 'ACTIVE')->firstOrFail();
    }

    /**
     * Genera il file della playlist da utilizzare nei player.
     * 
     * @param type $player_id L'id del player per il quale si vuole generare la playlist.
     */
    function generatePlayerPlaylistFile($player_id) {

        $player = Player::findOrFail($player_id);

        $playlist = $this->getUniqueActivePlaylist($player_id);

        $playlist_elements = $playlist->orderedElements();

        $f = new File(IServerPaths::CLIENTI_DOWNLOAD_DIR."/" . $player->cliente_id . "/" . $player->id . "/".IServerPaths::PLAYLIST_PATH);
        $f->getParentDir()->touch();
        $f->touch();

        \Log::info("Number of playlist elements : ".count($playlist_elements));

        $xml = new XmlBuilder(true);
        $xml->element("playlist")->forward();

        $xml->element("title", $playlist->titolo);
        $xml->element("last_update", $playlist->updated_at);

        $xml->element("list")->forward();
        
        foreach ($playlist_elements as $k => $el) {
            
            if ($el::one_entity() == "spot") {
                $xml->element("spot")->forward();
                
                $path = "/spot/" . $el->protected_spot_name;
                $xml->element("path", $path);
                $xml->element("duration", $el->duration);
                $xml->back();
            }
            
            if ($el::one_entity() == "song") {
                $xml->element("song")->forward();
                $album = $el->album()->firstOrFail();

                $path = "/music/" . $album->protected_album_name . "/" . $el->protected_song_name;
                $xml->element("path", $path);
                $xml->element("duration", $el->duration);
                $xml->back();
            }
        }

        $xml->back();

        $f->setContent($xml->getXML());

        return $f->getFullPath();
    }
    
    /**
     * Genera l'elenco delle tracce musicali necessarie a uno specifico player.
     * Il formato è come array di array :
     * album_id => song_id => 'nome protetto traccia'.
     * 
     * @param int $player_id L'id del player
     */
    public function getPlayerMusicList($player_id) {
        
        $playlist = $this->getUniqueActivePlaylist($player_id);
        $elements = $playlist->orderedElements();

        $album_list = [];
        foreach ($elements as $el) {
            if ($el::one_entity() == "song") {
                $song_id = $el->id;
                $album = Album::findOrFail($el->album_id);
                $canzone = Song::findOrFail($song_id);
                if (!isset($album_list[$el->album_id])) {
                    $album_list[$el->album_id] = array();
                }
                $album_list[$el->album_id][$song_id] = "/" . $album->protected_album_name . "/" . $canzone->protected_song_name;
            }
        }
        
        return $album_list;
    }

    /**
     * Genera il file con l'elenco delle tracce musicali (solo canzoni) per questo player.
     * 
     * @param int $player_id L'id del player.
     */
    public function generateMusicListFile($player_id) {

        $album_list = $this->getPlayerMusicList($player_id);
        
        $player = Player::findOrFail($player_id);
        
        $f = new File(IServerPaths::CLIENTI_DOWNLOAD_DIR."/" . $player->cliente_id . "/" . $player->id . "/" .IServerPaths::MUSIC_LIST_PATH);
        $w = $f->openWriter(true);

        foreach ($album_list as $album_id => $song_list) {
            
            foreach ($song_list as $song_id => $full_protected_name) {
                
                $w->writeln($full_protected_name);
            }
        }

        $w->close();
    }

    /**
     * Serve questa funzione facendo il sync sull'intera cartella degli spot
     * crittati? Non credo.
     * TODO eliminare se non necessaria
     * @param type $player_id
     */
    public function generateSpotListFile($player_id) {
        $player = Player::findOrFail($player_id);

        $playlist = $this->getUniqueActivePlaylist($player_id);
        $elements = $playlist->orderedElements();

        $f = new File(IServerPaths::CLIENTI_DOWNLOAD_DIR."/" . $player->cliente_id . "/" . $player_id . "/" .IServerPaths::SPOT_LIST_PATH);
        $w = $f->openWriter(true);

        foreach ($elements as $el) {
            if ($el::one_entity() == "spot") {
                
                //in ogni caso niente prefissi
                $w->writeln("/" . $el->protected_spot_name);
            }
        }

        $w->close();
    }
    
    /**
     * Genera il file di configurazione per il player, salvandolo nella
     * cartella del server relativa al player.
     * 
     * @param int $player_id L'id del player
     * @throws Exception Se qualcosa va storto
     */
    public function generatePlayerConfigFile($player_id) {
                
        if (!Config::hasKey(IGlobalConfiguration::CONFIG_PATH_KEY,  IGlobalConfiguration::CONTEXT)) {
            throw new \Exception("Proprietà non trovata! : ".IGlobalConfiguration::CONFIG_PATH_KEY);
        }
        
        $player = Player::where("id",$player_id)->firstOrFail();
        $props = [];
        
        $props[IPlayerConfiguration::TIME_ZONE_KEY] = $player->time_zone;
        $props[IPlayerConfiguration::PLAY_START_TIME_KEY] = $player->play_start_time;
        $props[IPlayerConfiguration::PLAY_END_TIME_KEY] = $player->play_end_time;
        $props[IPlayerConfiguration::PLAY_END_TIME_DAY_OFFSET_KEY] = $player->play_end_time_day_offset;
        $props[IPlayerConfiguration::CHECK_PLAY_MINUTES_INTERVAL_KEY] = $player->check_play_minutes_interval;
        $props[IPlayerConfiguration::FILES_UPDATE_TIME_KEY] = $player->files_update_time;
        $props[IPlayerConfiguration::LOOP_PLAYLIST_KEY] = $player->loop_playlist ? "true" : "false";
        $props[IPlayerConfiguration::START_FROM_BEGINNING] = $player->start_from_beginning ? "true" : "false";

        \Log::debug("Config from player readed.");        

        $custom_data_path = IServerPaths::CLIENTI_DOWNLOAD_DIR . "/" . $player->cliente_id . "/" . $player_id . "/";
                
        $config_path = IServerPaths::CONFIG_PATH;
                
        $config_file = new File($custom_data_path.$config_path);
        
        \Log::debug("Saving config file to : ".$config_file);
        
        JavaXmlPropertiesUtils::saveToFile($config_file,$props);
    }
        
    /**
     * Ritorna il contenuto del file global.xml utilizzato dal player,
     * ritornato in fase di registrazione del player o in caso di modifiche
     * generali successive.
     * 
     * @param int $player_id L'id del player.
     * @return string Il contenuto del file global.xml
     */
    public function getPlayerGlobalConfigFile($player_id) {
        $player = Player::findOrFail($player_id);
        $cliente = $player->cliente()->firstOrFail();
        
        $props = [];
           
        //identità del player
        $props[IGlobalConfiguration::CLIENTE_ID_KEY] = $cliente->id;
        $props[IGlobalConfiguration::PLAYER_ID_KEY] = $player_id;
        $props[IGlobalConfiguration::CLIENTE_SECURITY_TOKEN_KEY] = $cliente->security_token;
        $props[IGlobalConfiguration::PLAYER_SECURITY_TOKEN_KEY] = $player->security_token;

        //elenco moduli da utilizzare per la diff
        $props[IGlobalConfiguration::MODULES_DIFF_SPECIFICATION_KEY] = Config::get(IGlobalConfiguration::MODULES_DIFF_SPECIFICATION_KEY,  IGlobalConfiguration::CONTEXT);


        //percorsi di file scaricati
        $props[IGlobalConfiguration::CONFIG_PATH_KEY] = Config::get(IGlobalConfiguration::CONFIG_PATH_KEY,  IGlobalConfiguration::CONTEXT);
        $props[IGlobalConfiguration::PLAYLIST_PATH_KEY] = Config::get(IGlobalConfiguration::PLAYLIST_PATH_KEY,  IGlobalConfiguration::CONTEXT);
        $props[IGlobalConfiguration::OVERRIDE_GLOBAL_CONFIG_PATH_KEY] = Config::get(IGlobalConfiguration::OVERRIDE_GLOBAL_CONFIG_PATH_KEY,  IGlobalConfiguration::CONTEXT);
        
        //altre config - server http root
        $props[IGlobalConfiguration::HTTP_ROOT_KEY] = Config::get(IGlobalConfiguration::HTTP_ROOT_KEY,  IGlobalConfiguration::CONTEXT);
        
        //parametri client rsync per il download dei files
        $props[IGlobalConfiguration::UPDATE_REMOTE_HOST_KEY] = Config::get(IGlobalConfiguration::UPDATE_REMOTE_HOST_KEY,  IGlobalConfiguration::CONTEXT);

        $props[IGlobalConfiguration::UPDATE_CHECK_ADDRESS_KEY] = Config::get(IGlobalConfiguration::UPDATE_CHECK_ADDRESS_KEY,  IGlobalConfiguration::CONTEXT);
        $props[IGlobalConfiguration::UPDATE_REQUEST_ADDRESS_KEY] = Config::get(IGlobalConfiguration::UPDATE_REQUEST_ADDRESS_KEY,  IGlobalConfiguration::CONTEXT);
        $props[IGlobalConfiguration::UPDATE_DOWNLOAD_ADDRESS_KEY] = Config::get(IGlobalConfiguration::UPDATE_DOWNLOAD_ADDRESS_KEY,  IGlobalConfiguration::CONTEXT);
        
        
        //indirizzi delle notifiche (senza host)
        $props[IGlobalConfiguration::INSTANCE_STARTED_NOTIFICATION_ADDRESS_KEY] = Config::get(IGlobalConfiguration::INSTANCE_STARTED_NOTIFICATION_ADDRESS_KEY,  IGlobalConfiguration::CONTEXT);
        $props[IGlobalConfiguration::UPDATE_STARTED_NOTIFICATION_ADDRESS_KEY] = Config::get(IGlobalConfiguration::UPDATE_STARTED_NOTIFICATION_ADDRESS_KEY,  IGlobalConfiguration::CONTEXT);
        $props[IGlobalConfiguration::UPDATE_COMPLETED_NOTIFICATION_ADDRESS_KEY] = Config::get(IGlobalConfiguration::UPDATE_COMPLETED_NOTIFICATION_ADDRESS_KEY,  IGlobalConfiguration::CONTEXT);
        $props[IGlobalConfiguration::SERVICE_STARTED_NOTIFICATION_ADDRESS_KEY] = Config::get(IGlobalConfiguration::SERVICE_STARTED_NOTIFICATION_ADDRESS_KEY,  IGlobalConfiguration::CONTEXT);
        $props[IGlobalConfiguration::SERVICE_STOPPED_NOTIFICATION_ADDRESS_KEY] = Config::get(IGlobalConfiguration::SERVICE_STOPPED_NOTIFICATION_ADDRESS_KEY,  IGlobalConfiguration::CONTEXT);
        
        $result = JavaXmlPropertiesUtils::saveToString($props);
        return $result;
    }

}
