<ul class="navigation">
    @include("admin.menu_root")
    {{-- Menù utenti, accessibile a chi ha il permesso "manage-users" --}}
    @ican('indexOrCreateUsers')
        @include("admin.users.menu")
    @endcan
    {{-- Menù clienti, accessibile a chi ha il permesso "manage-users" e "manage-customers" --}}
    @ican('indexOrCreateCustomers')
        @include("admin.customers.menu")
    @endcan
    {{-- Menù player, accessibile ha chi ha il permesso "manage-customers","sys-admin" e "playlist-editor" --}}
    @ican('indexPlayers')
        @include("admin.players.menu")
    @endcan
    @ican('indexPlaylists')
        @include("admin.playlists.menu")
    @endcan
    {{-- Album e spot : solo per "sys-admin" e "playlist-editor" --}}
    @include("admin.albums.menu")
    @include("admin.spots.menu")
    {{-- Visibile a tutti --}}
    @include("admin.system.menu")
</ul>