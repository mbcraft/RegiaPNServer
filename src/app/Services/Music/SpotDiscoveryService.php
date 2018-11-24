<?php

namespace App\Services\Music;

use App\Contracts\Music\SpotDiscoveryContract;

use App\Models\Cliente;
use App\Models\Player;
use App\Models\Spot;

use Mbcraft\Piol\FileSystemUtils;
use Mbcraft\Piol\Dir;
use Mbcraft\Piol\File;

use Illuminate\Database\Eloquent\ModelNotFoundException;

class SpotDiscoveryService extends AbstractDiscoveryService implements SpotDiscoveryContract {
    
    /**
     * 
     * @see SpotDiscoveryService::findNewSpots();
     */
    function findNewSpots() {
        
        $results = [];
        
        $d = new Dir(IServerPaths::CLIENTI_UPLOAD_DIR);
        $d->touch();
        
        $clienti_folders = $d->listFolders();
        
        foreach ($clienti_folders as $fold) {
            
            try {
                //su upload cerco con unique_label
                $cliente = Cliente::where("unique_label",$fold->getName())->firstOrFail();
            
            } catch (ModelNotFoundException $ex) {
                \Log::debug("Impossibile trovare il cliente con unique_label=".$fold->getName());
                return FALSE;
            }
            
            $results[$cliente->id] = array();
            
            $player_folders = $fold->listFolders();
            foreach ($player_folders as $player_folder) {
                try {
                    //ancora cerco con unique_label
                    $player = Player::where("cliente_id",$cliente->id)->where("unique_label",$player_folder->getName())->firstOrFail();
                } catch (ModelNotFoundException $ex) {
                    \Log::debug("Impossibile trovare il cliente con cliente_id=".$cliente->id." unique_label=".$player_folder->getName());
                    return FALSE;
                }
                //memorizzo con id
                $results[$cliente->id][$player->id] = array();
                
                $spots_dir = $player_folder->newDir("spot");
                $spot_files = $spots_dir->listFiles();
                
                foreach ($spot_files as $spot_file) {
                    $ext = strtolower($spot_file->getLastExtension());
                    if ($this->isTrackExtensionAllowed($ext)) {
                        $already_saved = Spot::where("player_id",$player->id)->where("nome_spot",$spot_file->getFullName())->count()===1;
                        if (!$already_saved)
                            $results[$cliente->id][$player->id][] = $spot_file->getFullName();
                    }
                }
            }
        }
        //i dati ritornati sono indicizzati per cliente_id e player_id
        return $results;
    }
    
    /**
     * 
     * @see SpotDiscoveryService::hasNewSpots($spot_data);
     */
    function hasNewSpots($spot_data) {
        //sui dati cerco con gli id -> ok
        foreach ($spot_data as $cliente_id => $data) {
            foreach ($data as $player_id => $spot_list) {
                if (count($spot_list)>0)
                    return true;
            }
        }
        return false;
    }
    
    /**
     * 
     * @see SpotDiscoveryService::registerSpots($spot_data);
     */
    function registerSpots($spot_data) {
        $registered_spots = 0;
        //sui dati itero con gli id -> ok
        foreach ($spot_data as $cliente_id => $data) {
            $cliente = Cliente::where("id",$cliente_id)->firstOrFail();
            $cliente_label = $cliente->unique_label;
            foreach ($data as $player_id => $spot_list) {
                $player = Player::where("cliente_id",$cliente_id)->where("id",$player_id)->firstOrFail();
                $player_label = $player->unique_label;
                foreach ($spot_list as $k => $nome_spot) {
                    $temp_protected_spot_name = FileSystemUtils::filterPathName($nome_spot.AbstractEncryptionService::getEncryptedFileExtension());
                    if (strlen($temp_protected_spot_name>80))
                        $protected_spot_name = "".rand(100000,999999)."_".substr($temp_protected_spot_name,strlen($temp_protected_spot_name)-80,80);
                    else
                        $protected_spot_name = $temp_protected_spot_name;
                    $sp = Spot::create(["player_id" => $player_id,"nome_spot" => $nome_spot,"protected_spot_name" => $protected_spot_name]);
                    //su filesystem cerco con unique_label in upload
                    $spot_file = new File(IServerPaths::CLIENTI_UPLOAD_DIR."/".$cliente_label."/".$player_label.IServerPaths::SPOT_DIRECTORY."/".$nome_spot);
                    
                    $this->fillPlayableWithTrackInfo($sp, $spot_file);
                    
                    $registered_spots++;
                }
                
            }
        }
        
        return $registered_spots;
    }
    
    /**
     * @see SpotDiscoveryService::fillSpotsMetadata();
     */
    function fillSpotsMetadata() {
        $unfetched_spots = Spot::where('metadata_status','NOT_FETCHED')->get();
    
        foreach ($unfetched_spots as $spot) {            
            $this->fillPlayableWithTrackInfo($spot, $spot->getUnencryptedFile());
        }
        
        return count($unfetched_spots);
    }
}