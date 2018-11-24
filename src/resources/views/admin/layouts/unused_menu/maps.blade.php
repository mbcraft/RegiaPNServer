<li class="menu-dropdown {{ (Request::is('admin/google_maps') || Request::is('admin/vector_maps')? 'active' : '') }}">
    <a href="#">
        <i class="menu-icon fa fa-map-marker"></i>
        <span>Maps</span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
        <li {{ (Request::is('admin/google_maps') ? 'class=active' : '') }}>
            <a href="{{ URL::to('admin/google_maps') }}">
                <i class="fa fa-fw fa-globe"></i>
                Google Maps
            </a>
        </li>
        <li {{ (Request::is('admin/vector_maps') ? 'class=active' : '') }}>
            <a href="{{ URL::to('admin/vector_maps') }}">
                <i class="fa fa-fw fa-map-marker"></i>
                Vector Maps
            </a>
        </li>
    </ul>
</li>