<li class="menu-dropdown {{ (Request::is('admin/timeline') || Request::is('admin/transitions') || Request::is('admin/circle_sliders') ? 'active' : '') }}">
    <a href="#">
        <i class="menu-icon fa fa-briefcase"></i>
        <span>
            UI Components
        </span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">

        <li {{ (Request::is('admin/timeline') ? 'class=active' : '') }}>
            <a href="{{ URL::to('admin/timeline') }}">
                <i class="fa fa-fw fa-clock-o"></i>
                Timeline
            </a>
        </li>
        <li {{ (Request::is('admin/transitions') ? 'class=active' : '') }}>
            <a href="{{ URL::to('admin/transitions') }}">
                <i class="fa fa-fw fa-star-half-empty"></i>
                Transitions
            </a>
        </li>
        <li {{ (Request::is('admin/circle_sliders') ? 'class=active' : '') }}>
            <a href="{{ URL::to('admin/circle_sliders') }}">
                <i class="fa fa-fw fa-sun-o"></i>
                Circle Sliders
            </a>
        </li>
    </ul>
</li>