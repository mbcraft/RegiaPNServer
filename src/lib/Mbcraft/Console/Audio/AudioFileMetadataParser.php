<?php

namespace Mbcraft\Console\Audio {

    use Mbcraft\Piol\File;
    use Mbcraft\Command\CmdHelper;
    
    /**
     * Questa classe viene utilizzata per la lettura dei metadati delle canzoni.
     * 
     * Some help from :
     * 
     * http://stackoverflow.com/questions/10159898/php-exec-missing-output?rq=1
     * http://stackoverflow.com/users/553223/vaichidrewar
     */    
    class AudioFileMetadataParser {
        
        private $myFile;
        private $lines;
        private $metadata = array();
        private $duration;
        private $bitrate;
        
        private $i = 0;
        
        private $my_tmp_storage_dir;
        
        private $metadata_parsed = false;
        private $duration_parsed = false;
        
        /**
         * Constructs a new AudioFileMetadataParser.
         * 
         * @param \Mbcraft\Piol\File $toAnalyze The file to analyze.
         */
        function __construct(File $toAnalyze,$tmp_storage_dir=null) {
            $this->myFile = $toAnalyze;
            $this->my_tmp_storage_dir = $tmp_storage_dir;
        }
        
        /**
         * Actually does the parsing. Data will be available from the get methods
         * only after calling this one.
         */
        function analyze() {
            $cmd = config('media.metadata_parser_command');
            $final_path = $this->myFile->getFullPath();
            $command = $cmd." \"".$final_path."\"";
            
            $this->lines = CmdHelper::runCommand($this->my_tmp_storage_dir, $command);
            
            $this->parseResult();
            
        }
        
        private function logSummary() {
            \Log::debug("Line count : ".count($this->lines));
            \Log::debug("Data : ".join("|",$this->lines));
            \Log::debug("Metadata found : ".count($this->metadata));
            \Log::debug("Duration : ".($this->duration==null) ? "NO" : "YES");
            \Log::debug("Bitrate : ".($this->bitrate==null) ? "NO" : "YES");
        }
        
        /**
         * Parses the whole result.
         */
        private function parseResult() {
            $cmd = config('media.metadata_parser_command');
            $ii = &$this->i;
            $ll = &$this->lines;
            
            if (strpos($ll[$ii],$cmd)!==FALSE)  //skip program name
            { 
                //echo "Skipping 'avprobe' ...\n";
                $ii++;
            }
            if (strpos($ll[$ii], "built on")!==FALSE)    //skip built string
            {
                //echo "Skipping 'built on' ...\n";
                $ii++;
            }
            while (strpos($ll[$ii], "[")===0)    //skip warnings
            {
                //echo "Skipping debug message ...\n";
                $ii++;
            }
            if (strpos($ll[$ii],"Input")!==FALSE)    //skip Input stream
            {
                //echo "Skipping 'Input' ...\n";
                $ii++;
            }
            
            while ($ii<count($ll))
                $this->parseMetadataOrDuration();
        }
        
        /**
         * Parses metadata OR duration, which comes first.
         */
        private function parseMetadataOrDuration() {
            $ii = &$this->i;
            $ll = &$this->lines;
            
            if (!$this->metadata_parsed && strpos($ll[$ii],"  Metadata:")===0) {
                //echo "Metadata found.\n";
                $this->parseMetadata();
                $this->metadata_parsed = true;
            }
            else if (!$this->duration_parsed && strpos($ll[$ii],"  Duration:")===0) {
                //echo "Duration found.\n";
                $this->parseDurationAndBitrate();
                $this->duration_parsed = true;
            } else {
                $ii++;
            }
        }
        
        /**
         * Parses metadata.
         */
        private function parseMetadata() {
            $ii = &$this->i;
            $ll = &$this->lines;
            
            $ii++;
            while (strpos($ll[$ii],"Duration")===FALSE) {
                $parts = explode(":",$ll[$ii]);
                $ii++;
                $key = trim($parts[0]);
                $value = trim($parts[1]);
                $this->metadata[$key] = $value;
                //\Log::debug("Metadata ".$key." found : ".$value);
            }
        }
        
        /**
         * Parses duration and bitrate.
         */
        private function parseDurationAndBitrate() {
            $ii = &$this->i;
            $ll = &$this->lines;
            
            $parts = explode(",",$ll[$ii]);
            //duration
            $duration_parts = explode("Duration:",$parts[0]);
            $this->duration = trim($duration_parts[1]);
            //\Log::debug("Duration found : ".$this->duration);
            //bitrate
            for ($i=1;$i<count($parts);$i++) {
                if (strpos($parts[$i],"bitrate")!==FALSE) {
                    $bitrate_parts = explode(":",$parts[$i]);
                    $this->bitrate = trim($bitrate_parts[1]);
                    //\Log::debug("Bitrate found : ".$this->bitrate);
                    break;
                }
            }
            $ii++;
            $ii++;   //skip stream info
        }
        
        /**
         * Returns the metadata in array format.
         * @return array the metadata array.
         */
        function getMetadata() {
            return $this->metadata;
        }
        
        /**
         * Returns the duration of this audio file in the format HH:mm:ss.MM
         * @return string the probed duration of this stream
         */
        function getDuration() {
            return $this->duration;
        }
        
        /**
         * Returns the bitrate of this file, eg. "123 kb/s"
         * 
         * @return string the bitrate value and unit, as a string.
         */
        function getBitrate() {
            return $this->bitrate;
        }
        
        
        function printResult() {
            echo "Line count : ".count($this->lines)."\n";
            foreach ($this->lines as $line) {
                echo $line."\n";
            }
        }
        
        function printMetadata() {
            echo "Metadata : \n";
            foreach ($this->metadata as $k => $v) {
                echo $k." -> ".$v."\n";
            }
        }
        
        function printDuration() {
            echo "Duration : ".$this->duration."\n";
        }
        
        function printBitrate() {
            echo "Bitrate : ".$this->bitrate."\n";
        }
        
        
    }
}
