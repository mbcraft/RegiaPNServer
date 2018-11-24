<li class="menu-dropdown {{ (Request::is('admin/playlists') || Request::is('admin/playlists/create') || Request::is('admin/playlists/*') ? 'active' : '') }}">
    <a href="#">
        <?= FA::webApplication_Server(['menu-item','fa-fw']) ?>
        
        <span>{{ lang("playlists/menu.root") }}</span>
        <span class="fa arrow"></span>
    </a>
    @ican('indexPlaylists')
    <ul class="sub-menu">
       @menuitem("admin/playlists")
            <?= FA::webApplication_Tasks() ?>
            {{ lang("playlists/menu.list") }}
        @endmenuitem
    </ul>
    @endcan
</li>