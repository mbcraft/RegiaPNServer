<?php

namespace App\Models;

trait HasDurationTrait {
    
    /**
     * Ritorna la durata di questa traccia in secondi
     * 
     * @return int La durata della traccia in secondi
     */
    public function getDurationInSeconds() {
        $d = 0;
        if ($this->duration != null) {
            $parts = explode(":", $this->duration);
            $d += intval($parts[0])*3600+intval($parts[1])*60+ceil(doubleval($parts[2]));
        }
        return $d;
    }
}
