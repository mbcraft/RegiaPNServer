<?php

namespace App\Console\Commands\Music;

use Illuminate\Console\Command;
use App\Services\Music\AlbumEncryptionService;

class EncryptSongBatch extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'regiapn:encrypt_song_batch';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Encrypt songs for about one minute.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(AlbumEncryptionService $encryption)
    {
        $start_time = time();
        while ((($c=$encryption->getUnencryptedSong())!==FALSE) && (time()-$start_time<50)) {
            $encryption->encryptSong($c);
            $this->info("Song ".$c->nome_canzone." encrypted.");
        }
        $this->info("Elapsed time : ".(time()-$start_time));
    }
}
