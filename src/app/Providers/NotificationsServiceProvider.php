<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Services\NotificationsService;

class NotificationsServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     */
    public function register()
    {
        $this->app->singleton('App\Contracts\NotificationsContract',function ($app) {
            return new NotificationsService();
        });
    }
    
    public function provides() {
        return ['App\Contracts\NotificationsContract'];
    }
}
