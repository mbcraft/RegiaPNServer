<li class="menu-dropdown {{ (Request::is('admin/simple_tables') || Request::is('admin/datatables') || Request::is('admin/advanced_datatables') ? 'active' : '') }}">
    <a href="#">
        <i class="menu-icon fa fa-table"></i>
        <span>DataTables</span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
        <li {{ (Request::is('admin/simple_tables') ? 'class=active' : '') }}>
            <a href="{{ URL::to('admin/simple_tables') }}">
                <i class="fa fa-fw fa-tasks"></i>
                Simple tables
            </a>
        </li>
        <li {{ (Request::is('admin/datatables') ? 'class=active' : '') }}>
            <a href="{{ URL::to('admin/datatables') }}">
                <i class="fa fa-fw fa-database"></i>
                Data Tables
            </a>
        </li>
        <li {{ (Request::is('admin/advanced_datatables') ? 'class=active' : '') }}>
            <a href="{{ URL::to('admin/advanced_datatables') }}">
                <i class="fa fa-fw fa-table"></i>
                Advanced Tables
            </a>
        </li>
    </ul>
</li>