<li {{ (Request::is('admin/task') ? 'class=active' : '') }}>
    <a href="{{ URL::to('admin/task') }}">
        <i class="fa fa-fw fa-list-ul"></i>
        <span>Tasks</span>
        <small class="badge">10</small>
    </a>
</li>
<li class="menu-dropdown {{ (Request::is('admin/gallery') || Request::is('admin/masonry_gallery') || Request::is('admin/multiplefile_upload') || Request::is('admin/image_magnifier') ? 'active' : '') }}">
    <a href="#">
        <i class="menu-icon fa fa-fw fa-photo"></i>
        <span>Gallery</span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
        <li {{ (Request::is('admin/gallery') ? 'class=active' : '') }}>
            <a href="{{ URL::to('admin/gallery') }}">
                <i class="fa fa-fw fa-file-image-o"></i>
                Gallery
            </a>
        </li>
        <li {{ (Request::is('admin/masonry_gallery') ? 'class=active' : '') }}>
            <a href="{{ URL::to('admin/masonry_gallery') }}">
                <i class="fa fa-fw fa-file-image-o"></i>
                Masonry Gallery
            </a>
        </li>
        <li {{ (Request::is('admin/multiplefile_upload') ? 'class=active' : '') }}>
            <a href="{{ URL::to('admin/multiplefile_upload') }}">
                <i class="fa fa-fw fa-cloud-upload"></i>
                Multiple File Upload
            </a>
        </li>
        <li {{ (Request::is('admin/image_magnifier') ? 'class=active' : '') }}>
            <a href="{{ URL::to('admin/image_magnifier') }}">
                <i class="fa fa-fw fa-search"></i>
                Image Magnifier
            </a>
        </li>
    </ul>
</li>