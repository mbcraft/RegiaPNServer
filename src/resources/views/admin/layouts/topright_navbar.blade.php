{{-- messages --}}
{{-- @include('admin.layouts._messages') --}}

{{-- tasks --}}
{{-- @include('admin.layouts._tasks') --}}

{{-- notifications --}}
<script type="text/javascript">
    function notification_readed(category,notification_id) {
        $.post('/admin/'+category+'_notifications/readed',{ id:notification_id },function(data,textStatus,jqXHR){
            $('#'+category+'_notification_'+notification_id).hide();
            if (data>0) count_text = data;
            else count_text = '';
            $('#'+category+'_notifications_count').html(count_text);
            $('#inner_'+category+'_notifications_count').html(data);
            $('#notifications_menu_'+category).addClass("open");
            $('#notifications_menu_'+category+' a').attr("aria-expanded","true");
        });
    }
</script>
@inject("n_service","App\Services\NotificationsService")

@ican('indexSystemNotifications')
    @include('admin.layouts._notification_list',["notifications" => $n_service->getSystemNotificationsData(),"category" => "system"])
@endcan

@include('admin.layouts._notification_list',["notifications" => $n_service->getPlayerNotificationsData(),"category" => "player"])

{{-- User Account --}}
@include('admin.layouts._user_menu')