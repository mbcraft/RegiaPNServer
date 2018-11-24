<?php

namespace App\Console\Commands\Music;

use Illuminate\Console\Command;
use App\Services\Music\SpotEncryptionService;

class EncryptSpotBatch extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'regiapn:encrypt_spot_batch';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Encrypt spots for about one minute.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(SpotEncryptionService $encryption)
    {
        $start_time = time();
        while ((($s = $encryption->getUnencryptedSpot())!==FALSE) && (time()-$start_time<50)) {
            $encryption->encryptSpot($s);
            $this->info("Spot ".$s->nome_spot." encrypted.");
        } 
        $this->info("Elapsed time : ".(time()-$start_time));
    }
}
