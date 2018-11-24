<label class="col-lg-6 control-label" for="select_spot">Scegli spot :</label>
<div class="input-group">
    <div class="col-lg-10">
        <select id="select_spot" class="form-control select2" name='spot'>
            <option value="0"></option>
            @foreach($spots as $spot)
            <option value="{!! $spot->id !!}">{!! $spot->nome_spot !!}</option>
            @endforeach
        </select>
    </div>
</div>
<script type="text/javascript">
    $("#select_spot").change(function(){
        value = $("#select_spot").val();
        if (value>0) {
            $("#track_details").load("/admin/spots/"+value+"?select=true");
        } else {
            $("#track_details").html("");
        }
    });
</script>