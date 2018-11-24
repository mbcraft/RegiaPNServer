<?php
use App\Lang\Users\LMenu;
?>
<li class="menu-dropdown {{ (Request::is('admin/users') || Request::is('admin/users/create') || Request::is('admin/users/*') || Request::is('admin/deleted_users') ? 'active' : '') }}">
    <a href="#">
        <i class="menu-icon fa fa-fw fa-paw"></i>
        <span><?= LMenu::root() ?></span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
        @ican('indexOrCreateUsers')
            @menuitem("admin/users")
                <?= FA::webApplication_Users() ?>
                <?= LMenu::list_() ?>
            @endmenuitem
            @menuitem("admin/users/create")
                <?= FA::webApplication_User() ?>
                <?= LMenu::create() ?>
            @endmenuitem
        @endcan
        <li {{ ((Request::is('admin/users/*')) && !(Request::is('admin/users/create')) ? 'class=active' : '') }}>
            <a href="{{ URL::route('admin.users.show',Sentinel::getUser()->id) }}">
                <i class="fa fa-fw fa-user"></i>
                <?= LMenu::show() ?>
            </a>
        </li>

    </ul>
</li>