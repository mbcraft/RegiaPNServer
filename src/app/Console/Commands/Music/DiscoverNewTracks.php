<?php

namespace App\Console\Commands\Music;

use Illuminate\Console\Command;
use App\Services\Music\SpotDiscoveryService;
use App\Services\Music\AlbumDiscoveryService;
use App\Services\Music\SpotEncryptionService;
use App\Services\Music\AlbumEncryptionService;

class DiscoverNewTracks extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'regiapn:discover_new_tracks';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Discover new tracks (spots and albums).';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(SpotDiscoveryService $spot_discovery,AlbumDiscoveryService $album_discovery,SpotEncryptionService $spot_encryption,AlbumEncryptionService $album_encryption)
    {
        $start_time = time();
        $something_found = false;
        $new_spots = $spot_discovery->findNewSpots();
        if ($spot_discovery->hasNewSpots($new_spots)) {
            $spot_discovery->registerSpots($new_spots);
            $this->info(count($new_spots)." new spots discovered.");
            $crypt_count = 0;
            while (($spot_to_crypt = $spot_encryption->getUnencryptedSpot()) !== FALSE) {
                $spot_encryption->encryptSpot($spot_to_crypt);
                $crypt_count++;
            }
            $this->info($crypt_count." spots encrypted.");
            $something_found = true;
        }
        
        $new_albums = $album_discovery->findNewAlbums();
        if ($album_discovery->hasNewAlbums($new_albums)) {
            $album_discovery->registerAlbums($new_albums);
            $this->info(count($new_albums)." new albums discovered.");
            $crypt_count = 0;
            while (($song_to_crypt = $album_encryption->getUnencryptedSong()) !== FALSE) {
                $album_encryption->encryptSong($song_to_crypt);
                $crypt_count++;
            }
            $this->info($crypt_count." songs encrypted.");
            $something_found = true;
        }
        if (!$something_found)
            $this->info("No new spots or albums found.");
        $this->info("Elapsed time : ".(time()-$start_time)." seconds.");
    }
}
