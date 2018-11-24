{!! Form::open(['route'=>'show_playlist','method'=>'get']) !!}
{!! Form::label('playlist_id','Playlist id :') !!}
{!! Form::text('playlist_id') !!}
{!! Form::submit('Visualizza') !!}
{!! Form::close() !!}