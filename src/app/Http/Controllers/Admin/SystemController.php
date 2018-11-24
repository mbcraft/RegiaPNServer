<?php

namespace App\Http\Controllers\Admin;

use App\Services\Music\AlbumDiscoveryService;
use App\Services\Music\IGlobalConfiguration;
use App\Services\Music\SpotDiscoveryService;
use App\Services\Music\AlbumEncryptionService;
use App\Services\Music\SpotEncryptionService;

use View;

use App\Models\Config;

use App\Lang\System\LMessage;
use App\Lang\System\LForm;

class SystemController extends PagesController
{

    function getOperations()
    {
        $cfg = Config::where('key',IGlobalConfiguration::BACKGROUND_SCAN_AND_ENCODING_ENABLED_KEY)->first();

        return View::make("admin.system.operations",["background_processing_enabled" => $cfg->value]);
    }

    function postToggleBackgroundScanningAndEncoding()
    {
        $cfg = Config::where('key',IGlobalConfiguration::BACKGROUND_SCAN_AND_ENCODING_ENABLED_KEY)->first();
        if ($cfg->value==0)
            $cfg->value = 1;
        else
            $cfg->value = 0;
        
        $cfg->save();

        return redirect()->route("admin.system.operations");
    }
    
    /**
     * Effettua la scansione di nuove tracce, aggiungendole al database, effettua
     * la lettura dei metadati e la crittografia.
     */
    function postScan()
    {
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
        while (($e_song = $album_es->getUnencryptedSong()) !== FALSE) {
            $album_es->encryptSong($e_song);
            $enc_songs++;
        }

        \Log::debug("Album processed!");

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
        while (($e_spot = $spot_es->getUnencryptedSpot()) !== FALSE) {
            $spot_es->encryptSpot($e_spot);
            $enc_spots++;
        }

        \Log::debug("Spot processed!");

        return View::make("admin.system.scan_result", ["reg_songs" => $reg_songs, "fill_songs" => $fill_songs, "enc_songs" => $enc_songs, "reg_spots" => $reg_spots, "fill_spots" => $fill_spots, "enc_spots" => $enc_spots]);
    }

}