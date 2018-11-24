<li {{ (Request::is('admin/calendar') ? 'class=active' : '') }}>
    <a href="{{ URL::to('admin/calendar') }}">
        <i class=" menu-icon fa fa-fw fa-calendar"></i>
        <span>Calendar</span>
        <small class="badge">4</small>
    </a>
</li>
<li class="menu-dropdown {{ (Request::is('admin/mail_box') || Request::is('admin/compose') || Request::is('admin/view_mail') ? 'active' : '') }}">
    <a href="#">
        <i class="fa fa-fw fa-envelope"></i>
        <span>Email</span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
        <li {{ (Request::is('admin/mail_box') ? 'class=active' : '') }}>
            <a href="{{ URL::to('admin/mail_box') }}">
                <i class="fa fa-inbox"></i>
                Mail box
            </a>
        </li>
        <li {{ (Request::is('admin/compose') ? 'class=active' : '') }}>
            <a href="{{ URL::to('admin/compose') }}">
                <i class="fa fa-pencil"></i>
                Compose Message
            </a>
        </li>
        <li {{ (Request::is('admin/view_mail') ? 'class=active' : '') }}>
            <a href="{{ URL::to('admin/view_mail') }}">
                <i class="fa fa-eye"></i>
                Single Mail
            </a>
        </li>
    </ul>
</li>