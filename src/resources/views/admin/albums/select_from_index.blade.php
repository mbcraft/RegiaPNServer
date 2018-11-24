<label class="col-lg-6 control-label" for="select_album">Scegli elenco tracce :</label>
<div class="input-group">
    <div class="col-lg-10">
        <select id="select_album" class="form-control select2" name='album'>
            <option value="X"></option>
            <option value="0">Elenco Spot</option>
            @foreach($albums as $album)
            <option value="{!! $album->id !!}">{!! $album->nome_album !!}</option>
            @endforeach
        </select>
    </div>
    <script type="text/javascript">
        //secondary selector
        $("#select_album").change(function(){
            value = $("#select_album").val();
            if (value=='X') {
                $("#secondary_selector").html("");
            } else {
                if (value==0)
                    url = '/admin/spots?player_id='+player_id+'&select=true';
                if (value>0)
                    url = '/admin/albums/'+value+'?select=true';
                $("#secondary_selector").load(url);
            }
            $("#track_details").html("");
        });  
    </script>
</div>