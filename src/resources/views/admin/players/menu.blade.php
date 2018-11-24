<li class="menu-dropdown {{ (Request::is('admin/players') || Request::is('admin/players/create') || Request::is('admin/players/*') ? 'active' : '') }}">
    <a href="#">
        <?= FA::brand_Youtube_play(['menu-item','fa-fw']) ?>
        <span>{{ lang("players/menu.root") }}</span>
        <span class="fa arrow"></span>
    </a>
    @ican('indexPlayers')
    <ul class="sub-menu">
        @menuitem("admin/players")
            <?= FA::webApplication_Tasks() ?>
            {{ lang("players/menu.list") }}
        @endmenuitem
    </ul>
    @endcan
</li>