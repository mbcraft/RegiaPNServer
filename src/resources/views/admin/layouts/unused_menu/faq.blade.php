<li class="menu-dropdown {{ (Request::is('admin/faq') || Request::is('admin/invoice') || Request::is('admin/blank') ? 'active' : '') }}">
    <a href="#">
        <i class="menu-icon fa fa-files-o"></i>
        <span>Pages</span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
        <li {{ (Request::is('admin/faq') ? 'class=active' : '') }}>
            <a href="{{ URL::to('admin/faq') }}">
                <i class="fa fa-fw fa-question"></i>
                FAQ
            </a>
        </li>
        <li>
            <a href="{{ URL::to('admin/lockscreen') }}">
                <i class="fa fa-fw fa-lock"></i>
                Lockscreen
            </a>
        </li>
        <li>
            <a href="{{ URL::to('admin/invoice') }}">
                <i class="fa fa-fw fa-newspaper-o"></i>
                Invoice
            </a>
        </li>
        <li {{ (Request::is('admin/blank') ? 'class=active' : '') }}>
            <a href="{{ URL::to('admin/blank') }}">
                <i class="fa fa-fw fa-file-o"></i>
                Blank
            </a>
        </li>
        <li>
            <a href="{{ URL::to('admin/login') }}">
                <i class="fa fa-fw fa-sign-in"></i>
                Login
            </a>
        </li>
        <li>
            <a href="{{ URL::to('admin/register') }}">
                <i class="fa fa-fw fa-sign-in"></i>
                Register
            </a>
        </li>
        <li>
            <a href="{{ URL::to('admin/404') }}">
                <i class="fa fa-fw fa-unlink"></i>
                404 Error
            </a>
        </li>
        <li>
            <a href="{{ URL::to('admin/500') }}">
                <i class="fa fa-fw fa-frown-o"></i>
                500 Error
            </a>
        </li>
    </ul>
</li>