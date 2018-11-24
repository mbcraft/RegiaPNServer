<table>
    <tr>
        <td>Unregistered albums :</td><td>{{ $has_new_albums ? "TRUE" : "FALSE" }}</td><td>{{ var_export($albums_data,true) }}</td>
        <td>
            @if($has_new_albums)
            {!! Form::open(["route"=>"admin.albums.scan","method"=>"get"]) !!}
            {!! Form::submit("Registra album") !!}
            {!! Form::close() !!}
            @endif
        </td>
    </tr>
    <tr>
        <td>Unregistered spots :</td><td>{{ $has_new_spots ? "TRUE" : "FALSE" }}</td><td>{{ var_export($spots_data,true) }}</td>
        <td>
            @if($has_new_spots)
            {!! Form::open(["route"=>"admin.spots.scan","method"=>"get"]) !!}
            {!! Form::submit("Registra spot") !!}
            {!! Form::close() !!}
            @endif
        </td>
    </tr>
    <tr>
        <td>Unencrypted song :</td><td>{{ $has_unencrypted_song ? "TRUE" : "FALSE" }}</td><td></td>
        <td>
            @if($has_unencrypted_song)
            {!! Form::open(["route"=>"encrypt_song","method"=>"post"]) !!}
            {!! Form::submit("Critta canzone") !!}
            {!! Form::close() !!}
            @endif
        </td>
    </tr>
    <tr>
        <td>Unencrypted spot :</td><td>{{ $has_unencrypted_spot ? "TRUE" : "FALSE" }}</td><td></td>
        <td>
            @if($has_unencrypted_spot)
            {!! Form::open(["route"=>"encrypt_spot","method"=>"post"]) !!}
            {!! Form::submit("Critta spot") !!}
            {!! Form::close() !!}
            @endif
        </td>
    </tr>
</table>