{!! Form::token() !!}
<div class="cd-block">
    <div class="cd-content">
        <div class="form-group">
            <label class="col-lg-2 control-label" for="key">{{ lang('settings/form.key') }}</label>
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon">
                        <?= FA::webApplication_Key() ?>
                    </span>
                    <input type="text" placeholder="key" name="key" id="value" class="form-control" value="{!! Input::old('key',$setting->key) !!}" required="" readonly="readonly"/>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-2 control-label" for="value">{{ lang('settings/form.value') }}</label>
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon">
                        <?= FA::webApplication_Cube() ?>
                    </span>
                    <input type="text" placeholder="value" name="value" id="value" class="form-control" value="{!! Input::old('value',$setting->value) !!}" required="" {!! $setting->editable ? '' : 'readonly="readonly"' !!}/>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-2 control-label" for="context">{{ lang('settings/form.context') }}</label>
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon">
                        <?= FA::brand_Connectdevelop() ?>
                    </span>
                    <input type="text" placeholder="context" name="context" id="context" class="form-control" value="{!! Input::old('context',$setting->context) !!}" required="" />
                </div>
            </div>
        </div>
    </div>
</div>