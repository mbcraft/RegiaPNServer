<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Mbcraft\Laravel\Database\ResetTablesSeederTrait;

class DatabaseSeeder extends Seeder
{
    use ResetTablesSeederTrait;
    
    protected $reset_tables = [
        
                "tab_configs",

                "tab_elem_playlist",
                "tab_playlists",
                "tab_spots",
                "tab_player_notifications",

                "tab_players",

                "tab_update_downloads",
                "tab_updates",

                "tab_clienti",

                "tab_canzoni",
                "tab_album",
        
                "tab_system_notifications",
        
                "SENTINEL_throttle",
                "SENTINEL_reminders",
                "SENTINEL_persistences",
                "SENTINEL_activations",
                "SENTINEL_role_users",
                "SENTINEL_roles",
                "SENTINEL_users",  
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        
        $this->flushResets();
        
        \Log::debug("Table resets done.");
        
        $this->call(UserRolesTableSeeder::class);
        
        $this->call(AlbumTableSeeder::class);
        $this->call(CanzoniTableSeeder::class);
        $this->call(ClientiTableSeeder::class);
        $this->call(PlayersTableSeeder::class);
        $this->call(SpotsTableSeeder::class);
        $this->call(PlaylistsTableSeeder::class);
        $this->call(ElemPlaylistTableSeeder::class);
        $this->call(ConfigTableSeeder::class);
        
        $this->call(PlayerNotificationsTableSeeder::class);
        $this->call(SystemNotificationsTableSeeder::class);
        if (env('SEED_FILES',false))
            $this->call(MusicFilesSeeder::class);
        
        Model::reguard();
    }
}
