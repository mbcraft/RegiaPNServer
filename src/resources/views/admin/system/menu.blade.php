<li class="menu-dropdown {{ (Request::is('admin/settings') ? 'active' : '') }}">
    <a href="#">
        <?= FA::webApplication_Gears(['menu-icon','fa-fw']) ?>
        <span>{{ lang('system/menu.root') }}</span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
        {{-- operations -> solo "sys-admin" --}}
        @ican('executeMaintenanceOperations')
            @menuitem("admin/system/operations")
                <?= FA::webApplication_Bolt() ?>
                {{ lang('system/menu.operations') }}
            @endmenuitem
        @endcan
        {{-- Settings -> solo "sys-admin" --}}
        @ican('indexConfigs')
            @menuitem("admin/settings")
                    <?= FA::webApplication_Wrench() ?>
                    {{ lang('settings/menu.list') }}
            @endmenuitem
        @endcan
        {{-- System notifications : solo "sys-admin" --}}
        @ican('indexSystemNotifications')
            @menuitem("admin/system_notifications")
                    <?= FA::webApplication_Exclamation_circle() ?>
                    {{ lang('system_notifications/menu.list') }}
            @endmenuitem
        @endcan
    </ul>
</li>