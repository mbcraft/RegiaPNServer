<li class="menu-dropdown {{ (Request::is('admin/customers') || Request::is('admin/customers/create') || Request::is('admin/customers/*') ? 'active' : '') }}">
    <a href="#">
        <?= FA::webApplication_Users(['menu-icon','fa-fw']) ?>
        <span>{{ lang("customers/menu.root") }}</span>
        <span class="fa arrow"></span>
    </a>
    @ican('indexOrCreateCustomers')
    <ul class="sub-menu">
        @menuitem("admin/customers")
            <?= FA::webApplication_Users() ?>
            {{ lang("customers/menu.list") }}
        @endmenuitem
        @menuitem("admin/customers/create")
            <?= FA::webApplication_User_plus() ?>
            {{ lang("customers/menu.create") }}
        @endmenuitem
    </ul>
    @endcan
</li>