<li {{ (Request::is('admin') ? 'class="active"' : '') }}>
    <a href="{{ route('dashboard') }}">
        <i class="menu-icon fa fa-fw fa-home"></i>
        <span class="mm-text ">{{ lang('menu.home') }}</span>
    </a>
</li>