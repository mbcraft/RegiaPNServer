<li class="menu-dropdown {{ (Request::is('admin/spots') || Request::is('admin/spots/*') ? 'active' : '') }}">
    <a href="#">
        <?= FA::webApplication_Volume_up(['menu-item','fa-fw']) ?>        
        <span>{{ lang('spots/menu.root') }}</span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
        @menuitem("admin/spots")
                <?= FA::webApplication_File_sound_o() ?>
                {{ lang('spots/menu.list') }}
        @endmenuitem
    </ul>
</li>