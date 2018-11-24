<li class="dropdown notifications-menu" id="notifications_menu_{{ $category }}">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-fw {{ $notifications["icon"] }} black1"></i>
        @if_has_elements($notifications['list'])
        <span id="{{ $category }}_notifications_count" class="label label-warning">{{ $notifications['real_total_count'] > 99 ? "++" : $notifications['real_total_count'] }}</span>
        @endif
    </a>
    @if_has_elements($notifications['list'])
    <ul class="dropdown-menu dropdown-messages" id="{{ $category }}_notifications_list">
        <li class="dropdown-title">{{ lang('general.unreaded_notifications.prefix')." " }}<span id="inner_{{ $category }}_notifications_count">{{ $notifications['real_total_count'] }}</span>{{ " ".lang('general.unreaded_notifications.suffix') }}</li>
        @foreach($notifications['list'] as $not)
            @index("ix")
            @include("admin/layouts/_notification",["notification" => $not,"i" => $ix])
        @endforeach

        <li class="dropdown-footer"><a href="{{ $notifications['view_all']['link'] }}" >{{ $notifications['view_all']['text'] }}</a></li>
    </ul>
    @endif
</li>