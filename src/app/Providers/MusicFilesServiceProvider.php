<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Services\Music\AlbumDiscoveryService;
use App\Services\Music\SpotDiscoveryService;
use App\Services\Music\AlbumEncryptionService;
use App\Services\Music\SpotEncryptionService;
use App\Services\Music\PlayerConfigsGeneratorService;
use App\Services\Music\PlayerUpdatesGeneratorService;

class MusicFilesServiceProvider extends ServiceProvider
{
    const CONTRACTS_NAMESPACE = 'App\Contracts\Music';
    /**
     * Deferred loading enabled
     * 
     * @var type 
     */
    protected $defer = true;

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(self::CONTRACTS_NAMESPACE."\AlbumDiscoveryContract",function ($app) {
            return new AlbumDiscoveryService(config("shell_command_result_tmp_dir"));
        });
        
        $this->app->singleton(self::CONTRACTS_NAMESPACE."\AlbumEncryptionContract",function ($app) {
            return new AlbumEncryptionService(config("crypted_music_dir_pattern"));
        });
        
        $this->app->singleton(self::CONTRACTS_NAMESPACE."\SpotDiscoveryContract",function ($app) {
            return new SpotDiscoveryService(config("shell_command_result_tmp_dir"));
        });
        
        $this->app->singleton(self::CONTRACTS_NAMESPACE."\SpotEncryptionContract",function ($app) {
            return new SpotEncryptionService(config("crypted_spot_dir_pattern"));
        });
        
        $this->app->singleton(self::CONTRACTS_NAMESPACE."\PlayerConfigsGeneratorContract",function ($app) {
            return new PlayerConfigsGeneratorService();
        });
        
        $this->app->singleton(self::CONTRACTS_NAMESPACE."\PlayerUpdatesGeneratorContract",function ($app) {
            return new PlayerUpdatesGeneratorService();
        });
        
    }
    
    /**
     * Called by the container to obtail the list of contracts provided by this service provider.
     * 
     * @return array List of interfaces or class names provided
     */
    public function provides()
    {
        return [self::CONTRACTS_NAMESPACE.'\PlayerUpdatesGeneratorContract',self::CONTRACTS_NAMESPACE.'\PlayerConfigsGeneratorContract',self::CONTRACTS_NAMESPACE.'\AlbumDiscoveryContract',self::CONTRACTS_NAMESPACE.'\AlbumEncryptionContract',self::CONTRACTS_NAMESPACE.'\SpotDiscoveryContract',self::CONTRACTS_NAMESPACE.'\SpotEncryptionContract'];
    }
}
