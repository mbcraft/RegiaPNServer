<?php

namespace App\Services\Music;

use App\Contracts\Music\PlayerUpdatesGeneratorContract;
use App\Http\Controllers\Api\v1_0\ApiController;
use Mbcraft\Piol\File;
use Mbcraft\Piol\Dir;
use Mbcraft\Piol\Utils\JavaXmlPropertiesUtils;
use Mbcraft\Piol\ZipUtils;
use App\Models\Player;
use App\Models\Config;
use App\Models\Update;
use App\Models\Playlist;
use App\Models\Album;
use App\Models\Song;
use App\Models\Spot;

use Mbcraft\Cryptography\Sca0\SCA0Encrypter;

class PlayerUpdatesGeneratorService implements PlayerUpdatesGeneratorContract {
    
    const PLAYER_UPDATE_PACKAGE_ROOT_DIR = "/files/player_update_packages/";
    /**
     * Deletes the last update package created for a given player
     * 
     * @param int $player_id The id of the player
     */
    public function clearLastUpdatePackage($player_id) {
        
        \Log::debug("Deleting previous player package directory ...");
        
        $d = new Dir(self::PLAYER_UPDATE_PACKAGE_ROOT_DIR.$player_id);
        if ($d->exists()) {
            //recursive delete
            $d->delete(true);
        }
        $d->touch();
    }
    
    /**
     * Checks if there is one and only one active playlist for a given player.
     * This is necessary condition for generating an update package for a given player
     * 
     * @param int $player_id The id of the player
     * @return boolean true if there is exactly one active playlist, false otherwise
     */
    public function hasUniqueActivePlaylist($player_id) {
        return Playlist::where("player_id", $player_id)->where("stato", 'ACTIVE')->count()==1;
    }
    
    /**
     * Ritorna l'unica playlist attiva per un determinato player.
     * 
     * @param integer $player_id L'id del player
     * @return Playlist La playlist
     */
    private function getUniqueActivePlaylist($player_id) {
        return Playlist::where("player_id", $player_id)->where("stato", 'ACTIVE')->firstOrFail();
    }
    
    /**
     * Ritorna l'elenco delle tracce musicali necessarie a uno specifico player in base
     * alla sua playlist attiva.
     * Il formato è come array di array, necessario per ricreare agevolmente la stessa
     * struttura di cartelle e file per la creazione dell'archivio.
     * 
     * @see \App\Services\Music\PlayerConfigsGeneratorService
     * 
     * @param int $player_id L'id del player
     * 
     * @return Un array di nomi di canzoni
     */
    private function getPlayerMusicList($player_id) {

        $playlist = $this->getUniqueActivePlaylist($player_id);
        $elements = $playlist->orderedElements();

        $album_list = [];
        foreach ($elements as $el) {
            if ($el::one_entity() == "song") {
                $album = Album::findOrFail($el->album_id);
                $canzone = Song::findOrFail($el->id);
                
                if ($canzone->metadata_status=='NOT_FETCHED') {
                    throw new \Exception("A song with metadata not fetched is inside a playlist.");
                }
                
                if (!$canzone->crypted) {
                    throw new \Exception("A song not crypted is inside a playlist.");
                }
                
                \Log::debug("Album : ".$album->nome_album);
                \Log::debug("Song : ".$canzone->nome_canzone);
                
                $album_list[] = ["path" => "/" . $album->protected_album_name . "/" . $canzone->protected_song_name,"playable" => $canzone ];
            }
        }
        
        return $album_list;
    }
    
    /**
     * Ritorna l'elenco degli spot per un determinato player in formato array.
     * I percorsi contengono già l'id del cliente e del player di riferimento.
     * 
     * @param int $player_id L'id del player
     * 
     * @return array L'elenco degli spot crittati presenti nella playlist
     */
    private function getPlayerSpotList($player_id) {
        
        $player = Player::findOrFail($player_id);
        $cliente_id = $player->cliente_id;
        $playlist = $this->getUniqueActivePlaylist($player_id);
        $elements = $playlist->orderedElements();
        
        $spot_list = [];
        foreach ($elements as $el) {
            if ($el::one_entity() == "spot") {
                $spot = Spot::findOrFail($el->id);
                
                if ($spot->metadata_status=='NOT_FETCHED') {
                    throw new \Exception("A spot with metadata not fetched is found inside a playlist.");
                }
                
                if (!$spot->crypted) {
                    throw new \Exception("An encrypted spot is found inside a playlist.");
                }
                
                $spot_list[] = ["path" => "/" . $spot->protected_spot_name,"playable" => $spot];
            }
        }
        
        return $spot_list;
    }
    
    /**
     * Copia i file musicali nelle cartelle per creare l'archivio.
     * 
     * @param \Mbcraft\Piol\Dir $http_root La cartella http_root dell'archivio
     * @param int $cliente_id L'id del cliente
     * @param int $player_id L'id del player
     */
    private function prepareMusicModuleFiles($music_module_diff,$http_root,$cliente_id,$player_id) {
        
        $music_dir = $http_root->newSubdir("music");
                
        \Log::debug("Preparing music tracks for module crypted_music_download ...");

        //special preparation for crypted_music
        $crypted_music_dir = new Dir("/files/download/crypted_music/");
        $music_list = $this->getPlayerMusicList($player_id);

        \Log::debug("Music list dump : ".var_export($music_list,true));

        foreach ($music_list as $i => $data) {
            //f è la traccia musicale crittata da copiare
            if (!$music_module_diff->canSkipPlayable($data["playable"])) {
                $f = new File($crypted_music_dir->getPath() . $data["path"]);
                $album_dir = $f->getParentDir();
                $album_name = $album_dir->getName();
                $copy_album_dir = $music_dir->newDir($album_name);
                $copy_album_dir->touch();
                //copio il file musicale nella cartella creata nel percorso corretto
                $f->copy($copy_album_dir);
            } else {
                \Log::debug("Skipping music file : ".$data["path"]);
            }
        }
        
    }
    
    /**
     * Copia dei file degli spot nelle cartelle per creare l'archivio.
     * 
     * @param \Mbcraft\Piol\Dir $http_root La cartella http_root dell'archivio
     * @param int $cliente_id L'id del cliente
     * @param int $player_id L'id del player
     */
    private function prepareSpotModuleFiles($spot_module_diff,$http_root,$cliente_id,$player_id) {
        
        $spot_dir = $http_root->newSubdir("spot");
                
        \Log::debug("Preparing spots for module player_{cliente_id}_{player_id}__crypted_spot ...");

        $crypted_spot_dir = new Dir("/files/download/clienti/".$cliente_id."/".$player_id."/crypted_spot/");
        $spot_list = $this->getPlayerSpotList($player_id);

        \Log::debug("Spot list dump : ".var_export($spot_list,true));

        foreach ($spot_list as $i => $data) {

            if (!$spot_module_diff->canSkipPlayable($data["playable"])) {
                //f è lo spot musicale crittato da copiare
                $f = new File($crypted_spot_dir->getPath() . $data["path"]);
                //copio il file musicale nella cartella creata nel percorso corretto
                $f->copy($spot_dir);
            } else {
                \Log::debug("Skipping spot : ".$data["path"]);
            }
        }
    }
    
    /**
     * Copia dei file di configurazione nelle cartelle per creare l'archivio.
     * 
     * @param \Mbcraft\Piol\Dir $arch_data
     * @param int $cliente_id L'id del cliente
     * @param int $player_id L'id del player
     */
    private function prepareConfigModuleFiles($arch_data,$cliente_id,$player_id)
    {
        $config_dir = $arch_data->newSubdir("config");

        $original_config_dir = new Dir("/files/download/clienti/" . $cliente_id . "/" . $player_id . "/config/");
        $original_config_dir->touch();

        $config_generator = new PlayerConfigsGeneratorService();
        $config_generator->generatePlayerConfigFile($player_id);


        if ($this->hasUniqueActivePlaylist($player_id)) {
            $config_generator->generatePlayerPlaylistFile($player_id);
            //genero anche music e spot list, utili per eventuali futuri cleanup nel player
            $config_generator->generateMusicListFile($player_id);
            $config_generator->generateSpotListFile($player_id);
        } else {
            \Log::warn("Nessuna playlist presente per il player ".$player_id);
        }
        $files = $original_config_dir->listFiles();
        
        if (count($files)==0)
            throw new \Exception("Nessun file di configurazione trovato.");
        
        $config_dir->touch();
        
        //copia dei singoli file nella cartella config in quella
        foreach ($files as $cf) {
            $cf->copy($config_dir);
        }
    }
    
    private function prepareUpdatePackageSignature($arch_data,$cliente_id,$player_id) {
        $arch_dir = new Dir($arch_data);
        $signature_file = $arch_dir->newFile(IServerPaths::SIGNATURE_FILENAME);

        $player = Player::findOrFail($player_id);

        $update = Update::create(["player_id" => $player->id]);

        $entries = array();
        $entries[IGlobalConfiguration::CLIENTE_ID_KEY] = $cliente_id;
        $entries[IGlobalConfiguration::PLAYER_ID_KEY] = $player_id;
        $entries[IGlobalConfiguration::PLAYER_SECURITY_TOKEN_KEY] = $player->security_token;
        $entries[IGlobalConfiguration::UPDATE_ID_KEY] = $update->id;

        //avviene dopo il check -> ok
        $player->last_update_id = $update->id;
        $player->update_downloaded = false;

        $player->save();

        JavaXmlPropertiesUtils::saveToFile($signature_file,$entries);
    }
    
    /**
     * Copia dell'aggiornamento software all'interno dell'archivio
     * 
     * @param \Mbcraft\Piol\Dir $archive_dir
     * @param int $cliente_id L'id del cliente
     * @param int $player_id L'id del player
     */
    private function prepareSoftwareUpdateModuleFiles($archive_dir,$cliente_id,$player_id,$software_vendor,$software_name,$software_version) {
        
        $player = Player::findOrFail($player_id);
        
        if ($player->hasSoftwareUpdateAvailable()) {
        
            \Log::debug("An update for software is available!");
            
            $update_dir = $player->getLastSoftwareUpdateDirectory();

            $files = $update_dir->listFiles();

            //copia dei singoli file nella cartella config in quella
            foreach ($files as $update_file) {
                $update_file->copy($archive_dir);
            }
            
            $folders = $update_dir->listFolders();

            //copia dei singoli file nella cartella config in quella
            foreach ($folders as $update_folder) {
                $update_folder->copy($archive_dir);
            }
        } else {
            \Log::debug("No software updates found for player ".$player_id." : version ".$player->software_version);
        }
    }

    /**
     * Genera un pacchetto di aggiornamenti per il player dall'id specificato.
     * 
     * @param int $player_id L'id del player
     * 
     * @return string Il percorso completo del pacchetto di aggiornamento
     */
    public function generateUpdatePackage($modules_diff_parser, $player_id,$software_vendor,$software_name,$software_version) {
        
        \Log::debug("Generating update package ...");
        //creo una cartella per contenere i package di aggiornamento
        //root di tutte le cartelle necessarie per generare il package finale
        $d = new Dir(self::PLAYER_UPDATE_PACKAGE_ROOT_DIR.$player_id);
        if ($d->exists()) $d->delete();
        $d->touch();
        
        \Log::debug("Player update package dir created!");
        
        //creo la cartella che conterrà il package di update
        $protected_d = $d->newRandomSubdir();
        
        \Log::debug("Player update package protected dir created!");
        
        //il nome dell'archivio è : player_id__gg_mm_YY.zip
        $archive_name = "player_".$player_id."__".date("d_m_Y").".zip";
        //archivio protetto, estensione 'pcu'
        $protected_archive_name = "player_".$player_id."__".date("d_m_Y").".pcu";   //player crypted update
        
        $p = Player::findOrFail($player_id);
        $cliente_id = $p->cliente_id;

        $archive_tmp = $d->newSubdir("archive_tmp");
        $arch_data = $archive_tmp->newSubdir("data");
        $http_root = $arch_data->newSubdir("http_root");

        $this->prepareMusicModuleFiles($modules_diff_parser->getModuleByName("music"),$http_root,$cliente_id,$player_id);
        $this->prepareSpotModuleFiles($modules_diff_parser->getModuleByName("spot"),$http_root,$cliente_id,$player_id);
        $this->prepareConfigModuleFiles($arch_data,$cliente_id,$player_id);
        $this->prepareSoftwareUpdateModuleFiles($archive_tmp,$cliente_id,$player_id,$software_vendor,$software_name,$software_version);
        $this->prepareUpdatePackageSignature($archive_tmp,$cliente_id,$player_id);
        
        //create the archive
        $save_file = $d->newFile($archive_name);
        ZipUtils::createArchive($save_file, $archive_tmp);
        
        //encrypt the file....
        $final_encrypted_file = $protected_d->newFile($protected_archive_name);
        
        $encrypter = new SCA0Encrypter($save_file,$final_encrypted_file);
        $encrypter->encrypt();
        
        $save_file->delete();
        
        $archive_tmp->delete();
        
        return $protected_d->getName();
    }

} 