<?php
$r = rand(1000,9999);
?>
<div class="form-group">
    <label for="{{ "ff_".$r }}">{{ $field_label }}</label>
    <div class="input-group">
        <div class="input-group-addon">
            <i class="fa fa-fw fa-phone"></i>
        </div>
        <input id="{{ "ff_".$r }}" type="text" name="{{ $field_name }}" value="{{ $field_value }}" class="form-control" data-inputmask="'mask': ['+0099 999 999999[9]-9999']" data-mask/>
    </div>
</div>