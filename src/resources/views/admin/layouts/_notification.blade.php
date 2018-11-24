<li id="{{ $notification->category }}_notification_{{ $notification->id }}">
    <div style="position:relative;vertical-align: middle;width:100%;height:100%;">
        <div style="position:relative;float:right;right:0px;top:0px;background-color:lightgrey;">
            <a href="javascript:notification_readed('{{ $notification->category }}',{{ $notification->id }});"><?= FA::webApplication_Close() ?></a>
        </div>
        <div class="noti-date">{{ $notification->created_at->format("H:i:s d-m-Y") }}</div>
    </div>
    <a href="/admin/{{ $notification->category }}_notifications/{{ $notification->id }}" class="message icon-not {{ $i%2==0 ? "striped-col" : "" }}">
        <i class="fa fa-fw {{ $notification->icon }} {{ $notification->color }}"></i>
        <div class="message-body">
            <strong>{{ $notification->title }}</strong>
            <br>
            {{ $notification->message }}
            <br>
        </div>
    </a>
</li>