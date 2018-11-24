Playlist elements :
<table>
    @foreach($playlist_elements as $element)
    <tr>
        @if($element->playable_type=="App\Models\Spot")
        <td>SPOT : </td><td>{{ $element->playable->nome_spot }}</td>
        @else
        <td>CANZONE : </td><td>{{ $element->playable->nome_canzone }}</td>
        @endif
    </tr>
    @endforeach
    <br />
    {!! Form::open(["route"=>"generate_playlist_file","method"=>"post"]) !!}
    {!! Form::hidden("player_id",$player_id) !!}
    {!! Form::submit("Genera Playlist") !!}
    {!! Form::close() !!}
</table>