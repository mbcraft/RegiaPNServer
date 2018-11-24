<?php
$r = rand(1000,9999);
?>
<div class="form-group">
    <label for="{{ "ff_".$r }}">{{ $field_label }}</label>
    <div class="input-group clockpicker-with-callbacks">
        <input id="{{ "ff_".$r }}" type="text" class="form-control" name="{{ $field_name }}" value="{{ $field_value }}">
        <span class="input-group-addon">
            <span class="glyphicon glyphicon-time"></span>
        </span>
    </div>
</div>