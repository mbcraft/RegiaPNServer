<li class="menu-dropdown {{ (Request::is('admin/form_elements') || Request::is('admin/form_editors') || Request::is('admin/form_validations') || Request::is('admin/form_layouts') || Request::is('admin/form_wizards') || Request::is('admin/x-editable') ? 'active' : '') }}">
    <a href="#">
        <i class="menu-icon fa fa-check-square"></i>
        <span>Forms</span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
        <li {{ (Request::is('admin/form_elements') ? 'class=active' : '') }}>
            <a href="{{ URL::to('admin/form_elements') }}">
                <i class="fa fa-fw fa-fire"></i>
                Form Elements
            </a>
        </li>
        <li {{ (Request::is('admin/form_editors') ? 'class=active' : '') }}>
            <a href="{{ URL::to('admin/form_editors') }}">
                <i class="fa fa-fw fa-file-text-o"></i>
                Form Editors
            </a>
        </li>
        <li {{ (Request::is('admin/form_validations') ? 'class=active' : '') }}>
            <a href="{{ URL::to('admin/form_validations') }}">
                <i class="fa fa-fw fa-warning"></i>
                Form Validations
            </a>
        </li>
        <li {{ (Request::is('admin/form_layouts') ? 'class=active' : '') }}>
            <a href="{{ URL::to('admin/form_layouts') }}">
                <i class="fa fa-fw fa-fire"></i>
                Form Layouts
            </a>
        </li>
        <li {{ (Request::is('admin/form_wizards') ? 'class=active' : '') }}>
            <a href="{{ URL::to('admin/form_wizards') }}">
                <i class="fa fa-fw fa-cog"></i>
                Form Wizards
            </a>
        </li>
        <li {{ (Request::is('admin/x-editable') ? 'class=active' : '') }}>
            <a href="{{ URL::to('admin/x-editable') }}">
                <i class="fa fa-fw fa-eyedropper"></i>
                X-editable
            </a>
        </li>
    </ul>
</li>