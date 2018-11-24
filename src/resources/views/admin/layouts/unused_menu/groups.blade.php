                    <li class="menu-dropdown {{ (Request::is('admin/groups') || Request::is('admin/groups/create') || Request::is('admin/groups/*') ? 'active' : '') }}">
                        <a href="#">
                            <i class="menu-icon  fa fa-fw fa-users"></i>
                            <span>Groups</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li {{ (Request::is('admin/groups') ? 'class=active' : '') }}>
                                <a href="{{ URL::to('admin/groups') }}">
                                    <i class="fa fa-fw fa-users"></i>
                                    Groups
                                </a>
                            </li>
                            <li {{ (Request::is('admin/groups/create') ? 'class=active' : '') }}>
                                <a href="{{ URL::to('admin/groups/create') }}">
                                    <i class="fa fa-fw fa-user"></i>
                                    Add New Group
                                </a>
                            </li>
                        </ul>
                    </li>