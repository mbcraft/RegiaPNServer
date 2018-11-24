<div class="nav_profile">
    <div class="media profile-left">
        <a class="pull-left profile-thumb" href="#">
            @if(Sentinel::getUser()->pic)
                <div  style="background-image:url({!! '/uploads/users/'.Sentinel::getUser()->pic !!});" class="img-circle img-responsive pull-left img-avatar img-avatar-normal">
                </div>
            @else
                <img src="/assets/images/no_avatar.png" alt="no avatar"
                     class="img-circle img-responsive pull-left" height="35" width="35" />
            @endif
        </a>

        <div class="content-profile">
            <h4 class="media-heading">
                {{ Sentinel::getUser()->first_name }} {{ Sentinel::getUser()->last_name }}
            </h4>
            <ul class="icon-list">
                <li>
                    <a href="{{ URL::to('admin/users/'.Sentinel::getUser()->id) }}">
                        <i class="fa fa-fw fa-user"></i>
                    </a>
                </li>
                <!--
                <li>
                    <a href="{{ URL::to('admin/lockscreen') }}">
                        <i class="fa fa-fw fa-lock"></i>
                    </a>
                </li>
                -->
                <li>
                    <a href="{{ URL::to('admin/users/'.Sentinel::getUser()->id.'/edit') }}">
                        <i class="fa fa-fw fa-gear"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ URL::to('admin/logout') }}">
                        <i class="fa fa-fw fa-sign-out"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>