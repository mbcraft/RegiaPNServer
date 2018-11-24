<?php

namespace App\Console\Commands\Music;

use Illuminate\Console\Command;
use App\Services\Music\SpotEncryptionService;

class EncryptSpot extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'regiapn:encrypt_spot';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Encrypt a spot if one to encrypt is found.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(SpotEncryptionService $encryption)
    {
        $s = $encryption->getUnencryptedSpot();
        if ($s!==FALSE) {
            $encryption->encryptSpot($s);
            $this->info("Spot ".$s->nome_spot." encrypted.");
        } else
            $this->comment("No spot to encrypt found.");
        
    }
}
