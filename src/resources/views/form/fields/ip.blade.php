<?php
$r = rand(1000,9999);
?>
<div class="form-group">
    <label for="{{ "ff_".$r }}">{{ $field_label }}</label>
    <div class="input-group">
        <div class="input-group-addon">
            <i class="fa fa-fw fa-laptop"></i>
        </div>
        <input id="{{ "ff_".$r }}" type="text" name="{{ $field_name }}" value="{{ $field_value }}" class="form-control" data-inputmask="'alias': 'ip'" data-mask/>
    </div>
</div>