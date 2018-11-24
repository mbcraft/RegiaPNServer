<?php
$r = rand(1000,9999);
?>
<div class="form-group">
    <label for="{{ "ff_".$r }}" class="col-sm-2 control-label">{{ $field_label }}</label>
    <div class="col-sm-10">
        <input id="{{ "ff_".$r }}" type="password" name="{{ $field_name }}" value="{{ $field_value }}" class="form-control" id="inputPassword" placeholder="{{ $field_placeholder }}"></div>
</div>