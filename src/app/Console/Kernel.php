<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        \App\Console\Commands\Inspire::class,
        \App\Console\Commands\Music\EncryptSong::class,
        \App\Console\Commands\Music\EncryptSpot::class,
        \App\Console\Commands\Music\EncryptSongBatch::class,
        \App\Console\Commands\Music\EncryptSpotBatch::class,
        \App\Console\Commands\Music\DiscoverNewTracks::class,
        \App\Console\Commands\Music\LoadTracksMetadata::class,
        \Mbcraft\Laravel\Lang\Commands\RegenerateLangHelpers::class,
        \Mbcraft\Laravel\Lang\Commands\HideLang::class,
        \Mbcraft\Laravel\Lang\Commands\ShowLang::class,
        \Mbcraft\Laravel\Lang\Commands\CleanLang::class,
        \Mbcraft\Laravel\Lang\Commands\AlignLang::class,
        \Mbcraft\Laravel\Lang\Commands\OverviewLang::class,
        \Mbcraft\Laravel\Http\Commands\RegenerateRoutesHelpers::class,
        \Mbcraft\Laravel\Misc\Commands\LogClear::class,
        \Mbcraft\Laravel\Icons\Commands\RegenerateIconHelpers::class,
        \Mbcraft\Laravel\Misc\Commands\ResourcePathCheck::class
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {

    }
}
