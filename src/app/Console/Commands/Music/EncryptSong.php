<?php

namespace App\Console\Commands\Music;

use Illuminate\Console\Command;
use App\Services\Music\AlbumEncryptionService;

class EncryptSong extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'regiapn:encrypt_song';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Encrypt a song if one to encrypt is found.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(AlbumEncryptionService $encryption)
    {
        $c = $encryption->getUnencryptedSong();
        if ($c!==FALSE) {
            $encryption->encryptSong($c);
            $this->info("Song ".$c->nome_canzone." encrypted.");
        } else
            $this->comment("No song to encrypt found.");
        
    }
}
