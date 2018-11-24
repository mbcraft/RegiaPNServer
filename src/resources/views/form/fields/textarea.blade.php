<div class="form-group">
    <label for="{{ $field_id }}" class="control-label">{{ $field_label }}</label>
    <textarea id="{{ $field_id }}" name="{{ $field_name }}" class="form-control" maxlength="{{ isset($field_maxlength) ? $field_maxlength : 255 }}" rows="2" placeholder="{{ $field_placeholder }}">{{ $field_value }}</textarea>
</div>