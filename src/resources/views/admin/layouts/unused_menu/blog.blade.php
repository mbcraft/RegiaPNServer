<li class="menu-dropdown  {!! ((Request::is('admin/blogcategory') || Request::is('admin/blogcategory/create') || Request::is('admin/blog') ||  Request::is('admin/blog/create')) || Request::is('admin/blog/*') || Request::is('admin/blogcategory/*') ? 'active' : '') !!}">
    <a href="#">
        <i class="menu-icon fa fa-fw fa-newspaper-o"></i>
        <span class="title">Blog</span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
        <li {!! (Request::is('admin/blogcategory') ? 'class="active"' : '') !!}>
            <a href="{{ URL::to('admin/blogcategory') }}">
                <i class="fa fa-fw fa-list"></i>
                Blog Category List
            </a>
        </li>
        <li {!! (Request::is('admin/blog') ? 'class="active"' : '') !!}>
            <a href="{{ URL::to('admin/blog') }}">
                <i class="fa fa-fw fa-th-list"></i>
                Blog List
            </a>
        </li>
        <li {!! (Request::is('admin/blog/create') ? 'class="active"' : '') !!}>
            <a href="{{ URL::to('admin/blog/create') }}">
                <i class="fa fa-fw fa-pencil-square-o"></i>
                Add New Blog
            </a>
        </li>
    </ul>
</li>