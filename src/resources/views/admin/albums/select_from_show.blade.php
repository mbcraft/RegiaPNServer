<label class="col-lg-6 control-label" for="select_song">Scegli canzone :</label>
<div class="input-group">
    <div class="col-lg-10">
        <select id="select_song" class="form-control select2" name='song'>
            <option value="0"></option>
            @foreach($album->songs()->get() as $song)
            <option value="{!! $song->id !!}">{!! $song->nome_canzone !!}</option>
            @endforeach
        </select>
    </div>
</div>
<script type="text/javascript">
    $("#select_song").change(function(){
        value = $("#select_song").val();
        if (value>0) {
            $("#track_details").load("/admin/songs/"+value+"?select=true");
        } else {
            $("#track_details").html("");
        }
    });
</script>
