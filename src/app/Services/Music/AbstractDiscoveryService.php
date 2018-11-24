<?php

namespace App\Services\Music;

use Mbcraft\Piol\File;
use Mbcraft\Console\Audio\AudioFileMetadataParser;

use App\Models\IPlayable;


class AbstractDiscoveryService {
    
    private $shell_result_tmp_dir;
    
    function __construct($shell_result_tmp_dir="/storage/tmp/") {
        $this->shell_result_tmp_dir = $shell_result_tmp_dir;
    }
    
    /**
     * Riempie un IPlayable (Song o Spot) con i dati recuperati da avprobe.
     * 
     * @param \App\Models\IPlayable $obj Song o Spot da popolare
     * @param \Mbcraft\Piol\File $track Il file della traccia audio
     * @param type $status_messages Messaggi di stato
     * @return array L'array dei messaggi di stato aggiornato
     */
    protected function fillPlayableWithTrackInfo(IPlayable $obj,File $track) {

        //set file size and digest
        $obj->file_size = $track->getSize();
        $obj->file_digest = $track->getContentHash("md5");

        //do additional analysis for metadata
        $status_messages = array();
        //fetch metadata
        \Log::debug("Reading metadata for : ".$track->getFullPath());
        $mp = new AudioFileMetadataParser($track,$this->shell_result_tmp_dir);
        $mp->analyze();

        $obj->metadata_status = "NOT_FOUND";

        $metadata = $mp->getMetadata();
        foreach ($metadata as $key => $value) {
            if (array_search($key,["title","genre","album","artist","track","date"])!==FALSE)
            {
                $obj->$key = $value;
                $obj->metadata_status = "FOUND";
            }
            else {
                $msg = "Metadata key ".$key." cannot be saved for song ".$track->getFullName();
                \Log::debug($msg);
                $status_messages[] = $msg;
               
            }
        }
        $obj->bitrate = $mp->getBitrate();
        $obj->duration = $mp->getDuration();

        $obj->save();
        $msg = "Metadata for ".$track->getFullName()." saved.";
        \Log::debug($msg);
        $status_messages[] = $msg;
        
        return $status_messages;
    }
    
    protected function isTrackExtensionAllowed($ext) {
        return $ext==="mp3" || $ext==="aac" || $ext=="wav" || $ext=="m4a";
    }
}