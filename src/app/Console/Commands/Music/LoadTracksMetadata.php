<?php

namespace App\Console\Commands\Music;

use Illuminate\Console\Command;
use App\Services\Music\SpotDiscoveryService;
use App\Services\Music\AlbumDiscoveryService;

class LoadTracksMetadata extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'regiapn:load_tracks_metadata';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Loads metadata for all existing tracks.';
    
    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(SpotDiscoveryService $spot_discovery,AlbumDiscoveryService $album_discovery)
    {
        $start_time = time();
        
        $spots_filled = $spot_discovery->fillSpotsMetadata();
        $this->info($spots_filled." spots metadata loaded.");
        $songs_filled = $album_discovery->fillAlbumsMetadata();
        $this->info($songs_filled." songs metadata loaded.");
        
        $this->info("Elapsed time : ".(time()-$start_time)." seconds.");
    }
}
