<?php

namespace App\Models;

trait HasTotalDurationTrait {
    
    /**
     * Ritorna la durata totale di questo elemento composito nel formato HH:mm:ss.
     * 
     * @return string La durata totale nel formato HH:mm:ss.
     */
    public function getTotalDuration() {
        $tot_secs = $this->getDurationInSeconds();
        
        $hours = floor($tot_secs / 3600);
        $tot_secs -= $hours * 3600;
        $minutes = floor($tot_secs / 60);
        $tot_secs -= $minutes * 60;
        
        return str_pad($hours, 2, "0", STR_PAD_LEFT).":".str_pad($minutes, 2, "0", STR_PAD_LEFT).":".str_pad($tot_secs, 2, "0", STR_PAD_LEFT);
    }
}