<li class="menu-dropdown {{ (Request::is('admin/general_components') || Request::is('admin/pickers') || Request::is('admin/buttons') || Request::is('admin/panels') || Request::is('admin/tabs_accordions') || Request::is('admin/font_icons') || Request::is('admin/grid_layout') || Request::is('admin/tags_input') || Request::is('admin/nestable_list') || Request::is('admin/toastr_notifications') || Request::is('admin/session_timeout') || Request::is('admin/draggable_portlets') ? 'active' : '') }}">
    <a href="#">
        <i class="menu-icon fa fa-desktop"></i>
        <span>
            UI Features
        </span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
        <li {{ (Request::is('admin/general_components') ? 'class=active' : '') }}>
            <a href="{{ URL::to('admin/general_components') }}">
                <i class="fa fa-fw fa-plug"></i>
                General Components
            </a>
        </li>
        <li {{ (Request::is('admin/pickers') ? 'class=active' : '') }}>
            <a href="{{ URL::to('admin/pickers') }}">
                <i class="fa fa-fw fa-paint-brush"></i>
                Pickers
            </a>
        </li>
        <li {{ (Request::is('admin/buttons') ? 'class=active' : '') }}>
            <a href="{{ URL::to('admin/buttons') }}">
                <i class="fa fa-fw fa-delicious"></i>
                Buttons
            </a>
        </li>
        <li {{ (Request::is('admin/panels') ? 'class=active' : '') }}>
            <a href="{{ URL::to('admin/panels') }}">
                <i class="fa fa-fw fa-gift"></i>
                Panels
            </a>
        </li>
        <li {{ (Request::is('admin/tabs_accordions') ? 'class=active' : '') }}>
            <a href="{{ URL::to('admin/tabs_accordions') }}">
                <i class="fa fa-fw fa-copy"></i>
                Tabs &amp; Accordions
            </a>
        </li>
        <li {{ (Request::is('admin/font_icons') ? 'class=active' : '') }}>
            <a href="{{ URL::to('admin/font_icons') }}">
                <i class="fa fa-fw fa-font"></i>
                Font Icons
            </a>
        </li>
        <li {{ (Request::is('admin/grid_layout') ? 'class=active' : '') }}>
            <a href="{{ URL::to('admin/grid_layout') }}">
                <i class="fa fa-fw fa-columns"></i>
                Grid Layout
            </a>
        </li>
        <li {{ (Request::is('admin/tags_input') ? 'class=active' : '') }}>
            <a href="{{ URL::to('admin/tags_input') }}">
                <i class="fa fa-fw fa-tag"></i>
                Tags Input
            </a>
        </li>
        <li {{ (Request::is('admin/nestable_list') ? 'class=active' : '') }}>
            <a href="{{ URL::to('admin/nestable_list') }}">
                <i class="fa fa-fw fa-navicon"></i>
                Nestable List
            </a>
        </li>
        <li {{ (Request::is('admin/toastr_notifications') ? 'class=active' : '') }}>
            <a href="{{ URL::to('admin/toastr_notifications') }}">
                <i class="fa fa-fw fa-desktop"></i>
                Toastr Notifications
            </a>
        </li>
        <li {{ (Request::is('admin/session_timeout') ? 'class=active' : '') }}>
            <a href="{{ URL::to('admin/session_timeout') }}">
                <i class="fa fa-fw fa-rocket"></i>
                Session Timeout
            </a>
        </li>
        <li {{ (Request::is('admin/draggable_portlets') ? 'class=active' : '') }}>
            <a href="{{ URL::to('admin/draggable_portlets') }}">
                <i class="fa fa-fw fa-random"></i>
                Draggable Portlets
            </a>
        </li>
    </ul>
</li>