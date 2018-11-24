<li class="menu-dropdown {{ (Request::is('admin/charts') || Request::is('admin/flot_charts') || Request::is('admin/nvd3_charts') || Request::is('admin/chartjs_charts') ? 'active' : '') }}">
    <a href="#">
        <i class="menu-icon fa fa-bar-chart-o"></i>
        <span>Charts</span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
        <li {{ (Request::is('admin/flot_charts') ? 'class=active' : '') }}>
            <a href="{{ URL::to('admin/flot_charts') }}">
                <i class="fa fa-fw fa-area-chart"></i>
                Flot Charts
            </a>
        </li>
        <li {{ (Request::is('admin/nvd3_charts') ? 'class=active' : '') }}>
            <a href="{{ URL::to('admin/nvd3_charts') }}">
                <i class="fa fa-fw fa-line-chart"></i>
                NVD3 Charts
            </a>
        </li>
        <li {{ (Request::is('admin/chartjs_charts') ? 'class=active' : '') }}>
            <a href="{{ URL::to('admin/chartjs_charts') }}">
                <i class="menu-icon fa fa-bar-chart-o"></i>
                Chart js
            </a>
        </li>
    </ul>
</li>