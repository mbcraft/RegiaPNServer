<?php

namespace App\Http\Controllers\Api\v1_0;



use App\Models\Config;
use App\Services\Music\IGlobalConfiguration;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use App\Services\Music\AlbumDiscoveryService;
use App\Services\Music\AlbumEncryptionService;
use App\Services\Music\SpotDiscoveryService;
use App\Services\Music\SpotEncryptionService;

use Response;

class JobsController extends ApiController {

    function postTimedScanAndEncode()
    {
        $cfg = Config::where('key',IGlobalConfiguration::BACKGROUND_SCAN_AND_ENCODING_ENABLED_KEY)->first();
        if ($cfg->value==1) {
            $this->timedScanAndEncodeImpl();

            return "1";
        }
        return "0";
    }

    function timedScanAndEncodeImpl() {
        //time() gets time in seconds from epoch
        $max_time = time() + 40;

        $album_ds = new AlbumDiscoveryService();
        $spot_ds = new SpotDiscoveryService();
        $album_es = new AlbumEncryptionService();
        $spot_es = new SpotEncryptionService();
        //  --- ALBUM ---
        //registrazione di nuovi album
        $reg_songs = 0;
        $new_albums = $album_ds->findNewAlbums();
        if ($album_ds->hasNewAlbums($new_albums)) {
            $reg_songs += $album_ds->registerAlbums($new_albums);
        }

        //riempimento metadati altre tracce eventualmente presenti nel database
        $fill_songs = $album_ds->fillAlbumsMetadata();
        //crittografia tracce musicali
        $enc_songs = 0;
        while (time() < $max_time) {
            $e_song = $album_es->getUnencryptedSong();
            if ($e_song !== FALSE) {
                $album_es->encryptSong($e_song);
                \Log::debug("Song processed!");
                $enc_songs++;
            } else break;
        }

        //  --- SPOT ---
        //registrazione nuovi spot nel database

        $reg_spots = 0;
        $new_spots = $spot_ds->findNewSpots();

        if ($new_spots !== FALSE) {
            if ($spot_ds->hasNewSpots($new_spots)) {
                $reg_spots += $spot_ds->registerSpots($new_spots);
            }
        }
        //riempimento metadati spot già presenti nel database
        $fill_spots = $spot_ds->fillSpotsMetadata();
        //crittografia spot
        $enc_spots = 0;
        while (time() < $max_time) {

            $e_spot = $spot_es->getUnencryptedSpot();
            if ($e_spot !== FALSE) {
                $spot_es->encryptSpot($e_spot);
                \Log::debug("Spot processed!");
                $enc_spots++;
            } else break;
        }
    }
}