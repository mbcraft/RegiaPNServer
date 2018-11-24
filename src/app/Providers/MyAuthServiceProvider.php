<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;

use Gate;

use App\Models\Cliente;
use App\Policies\ClientePolicy;
use App\Models\Player;
use App\Policies\PlayerPolicy;
use App\Models\Playlist;
use App\Policies\PlaylistPolicy;
use App\Models\Album;
use App\Policies\AlbumPolicy;
use App\Models\Song;
use App\Policies\SongPolicy;
use App\Models\Spot;
use App\Policies\SpotPolicy;
use App\Models\PlayerNotification;
use App\Policies\PlayerNotificationPolicy;
use App\Models\SystemNotification;
use App\Policies\SystemNotificationPolicy;
use App\Models\Config;
use App\Policies\ConfigPolicy;
use App\Models\Auth\User;
use App\Policies\Auth\UserPolicy;



class MyAuthServiceProvider extends AuthServiceProvider
{
    protected $policies = [
        Cliente::class => ClientePolicy::class,
        Player::class => PlayerPolicy::class,
        Playlist::class => PlaylistPolicy::class,
        Album::class => AlbumPolicy::class,
        Song::class => SongPolicy::class,
        Spot::class => SpotPolicy::class,
        PlayerNotification::class => PlayerNotificationPolicy::class,
        SystemNotification::class => SystemNotificationPolicy::class,
        Config::class => ConfigPolicy::class,
        User::class => UserPolicy::class
    ];

    public function boot(GateContract $gate) {

        $this->registerPolicies($gate);
    }

}