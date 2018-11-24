<li class="menu-dropdown {{ (Request::is('admin/settings') ? 'active' : '') }}">
    <a href="#">
        <i class="menu-icon fa fa-bar-chart-o"></i>
        <span>{{ lang('settings/menu.root') }}</span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
        @menuitem("admin/settings")
            <?= FA::webApplication_Area_chart() ?>
            {{ lang('settings/menu.list') }}
        @endmenuitem
    </ul>
</li>