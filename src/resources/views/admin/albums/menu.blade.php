<?php
use App\Lang\Albums\LMenu;
?>
<li class="menu-dropdown {{ (Request::is('admin/albums') || Request::is('admin/albums/*') ? 'active' : '') }}">
    <a href="#">
        <?= FA::webApplication_Music(['menu-item','fa-fw']) ?>
        <span><?= LMenu::root() ?></span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
        @menuitem("admin/albums")
            <?= FA::webApplication_File_sound_o() ?>
            <?= LMenu::list_() ?>
        @endmenuitem
    </ul>
</li>