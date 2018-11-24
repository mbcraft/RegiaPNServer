<?php

use App\Lang\Users\LForm;
use App\Lang\Users\LTable;
?>

@include("widgets/form_elements/setup")
<div class="cd-block">
    <div class="cd-content">
        {!! Form::token() !!}
        <div class="form-group">
            <label for="pic" class="col-lg-2 control-label"><?= LForm::pic_label() ?></label>
            <div class="col-lg-6">
                <span class="file-input file-input-new"><div class="file-preview ">
                        <div class="close fileinput-remove">×</div>
                        <div class="">
                            <div class="file-preview-thumbnails">
                            </div>
                            <div class="clearfix"></div>    <div class="file-preview-status text-center text-success"></div>
                            <div style="display: none;" class="kv-fileinput-error file-error-message"></div>
                        </div>
                    </div>
                    <div class="kv-upload-progress hide"></div>
                    <div class="input-group ">
                        <div tabindex="-1" class="form-control file-caption  kv-fileinput-caption">
                            <span class="file-caption-ellipsis">…</span>
                            <div class="file-caption-name"></div>
                        </div>
                        <div class="input-group-btn">
                            <button type="button" title="Clear selected files" class="btn btn-danger fileinput-remove fileinput-remove-button"><i class="glyphicon glyphicon-trash"></i>Delete</button>
                            <button type="button" title="Abort ongoing upload" class="hide btn btn-default fileinput-cancel fileinput-cancel-button"><i class="glyphicon glyphicon-ban-circle"></i> Cancel</button>
                            <button type="submit" title="Upload selected files" class="btn btn-info kv-fileinput-upload fileinput-upload-button"><i class="glyphicon glyphicon-upload"></i> Upload</button>
                            <div class="btn btn-success btn-file"> <i class="glyphicon glyphicon-picture"></i> <?= LForm::uploadAvatar() ?> <input id="pic" name="pic" accept="image/*" class="" type="file"></div>
                        </div>
                    </div>
                </span>
            </div>
        </div>
    </div>
</div>
<div class="cd-block">
    <div class="cd-content">
        <div class="form-group">
            <label class="col-lg-2 control-label" for="first_name"><?= LForm::firstName() ?></label>
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-fw fa-user-md text-primary"></i>
                    </span>
                    <input type="text" placeholder="<?= LForm::firstName_placeholder() ?>" name="first_name" id="first_name" class="form-control" value="{!! Input::old('first_name',$user->first_name) !!}" required="" />
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-2 control-label" for="last_name"><?= LForm::lastName() ?></label>
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-fw fa-user-md text-primary"></i>
                    </span>
                    <input type="text" placeholder="<?= LForm::lastName_placeholder() ?>" name="last_name" id="last_name" class="form-control" value="{!! Input::old('last_name',$user->last_name) !!}" required="" />
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-2 control-label" for="password"><?= LForm::password() ?></label>
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-fw fa-key text-primary"></i>
                    </span>
                    <input type="password" name="password" placeholder="<?= LForm::password_placeholder() ?>" id="password" class="form-control" @if($required_passwords) required="required" @endif value="" />
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-2 control-label" for="password_confirm"><?= LForm::passwordConfirm() ?></label>
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-fw fa-key text-primary"></i>
                    </span>
                    <input type="password" name="password_confirm" placeholder="<?= LForm::passwordConfirm_placeholder() ?>" id="password_confirm" class="form-control" @if($required_passwords) required="required" @endif value="" />
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-2 control-label" for="email"><?= LForm::email() ?></label>
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-fw fa-envelope text-primary"></i>
                    </span>
                    <input type="text" placeholder="<?= LForm::email_placeholder() ?>" id="email" name="email" class="form-control" value="{!! Input::old('email',$user->email) !!}"></div>
            </div>
        </div>
        @ican('editRoles',$user)
            <div class="form-group">
                <label for="roles" class="col-md-2 control-label"><?= LForm::roles_label() ?></label>
                <div class="col-md-6">
                    <select class="form-control select2 select2-multiple" title="<?= LForm::roles_select() ?>" name="roles[]" id="roles" required="" multiple="multiple">
                        @foreach(Sentinel::getUser()->getRolesForUserEditing() as $role)
                        <option value="{{ $role->id }}" @if($user->roles()->find($role->id)!=null) selected="selected" @endif >{{ $role->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        @else
            <div class="form-group">
                <label for="roles" class="col-md-2 control-label"><?= LForm::roles_label() ?></label>
                <div class="col-md-6">
                    @foreach($user->roles()->get() as $role)
                    <span style="padding:5px;text-decoration: underline;" class="glyphicon glyphicon-star-empty text-info">{!! $role->name !!}</span>
                    @endforeach
                </div>
            </div>
        @endcan

        <!-- api password -->
        <div class="form-group">
            <label class="col-lg-2 control-label" for="api_password"><?= LForm::apiPassword() ?></label>
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-fw fa-key text-primary"></i>
                    </span>
                    <input type="text" placeholder="<?= LForm::apiPassword_placeholder() ?>" name="api_password" id="api_password" class="form-control" value="{!! Input::old('api_password',$user->api_password) !!}" />
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="activate" class="col-md-2 control-label"><?= LForm::activateUser() ?></label>
            <div class="col-md-6">
                <input id="activate" name="activate" type="checkbox" class="pos-rel p-l-30" value="1" @if(Input::old('activate',Sentinel::getActivationRepository()->completed($user))) checked="checked" @endif  >
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label"><?= LForm::gender_label() ?></label>
            <div class="col-md-6">
                <div class="radio">
                    <label>
                        <input type="radio" name="gender" value="M" <?= Input::old('gender', $user->gender) == 'M' ? 'checked="checked"' : '' ?> />
                        <?= LForm::gender_values_M() ?>
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="gender" value="F" <?= Input::old('gender', $user->gender) == 'F' ? 'checked="checked"' : '' ?> />
                        <?= LForm::gender_values_F() ?>
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="gender" value="O" <?= Input::old('gender', $user->gender) == 'O' ? 'checked="checked"' : '' ?> />
                        <?= LForm::gender_values_O() ?>
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-2 control-label" for="dob"><?= LForm::dob() ?></label>
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-fw fa-calendar text-primary"></i>
                    </span>
                    <input type="text" name="dob" placeholder="<?= LForm::dob_placeholder() ?>" id="dob" class="form-control" value="{!! Input::old('dob',$user->dob) !!}" />
                </div>
            </div>
        </div>
        @section('footer_scripts')
        @parent
        <script type='text/javascript'>
            $(".datepicker").datepicker();
        </script>
        @endsection
    </div>
</div>
<div class="cd-block">
    <div class="cd-content">
        <div class="form-group">
            <label class="col-lg-2 control-label"><?= LForm::phone() ?></label>
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-fw fa-phone text-primary"></i>
                    </span>
                    <input type="text" placeholder="<?= LForm::phone_placeholder() ?>" id="phone" name="phone" class="form-control" value="{!! Input::old('phone',$user->phone) !!}" />
                </div>
            </div>
        </div>

        <div class="prf-contacts sttng">
            <h3 class="text-primary"><?= LTable::location() ?></h3>
        </div>

        <div class="form-group">
            <label class="col-lg-2 control-label" for="indirizzo"><?= LForm::address() ?></label>
            <div class="col-lg-6">
                <textarea rows="5" cols="30" placeholder="<?= LForm::address_placeholder() ?>" class="form-control" id="indirizzo" name="indirizzo">{!! Input::old('indirizzo',$user->indirizzo) !!}</textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-2 control-label" for="cap"><?= LForm::postal() ?></label>
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon">
                        <?= FA::webApplication_Map_pin("fa-fw text-primary") ?>
                    </span>
                    <input type="text" placeholder="<?= LForm::postal_placeholder() ?>" id="cap" class="form-control" name="cap"  value="{!! Input::old('cap',$user->cap) !!}" />
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-2 control-label" for="citta"><?= LForm::city() ?></label>
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-fw fa-dot-circle-o text-primary"></i>
                    </span>
                    <input type="text" placeholder="<?= LForm::city_placeholder() ?>" id="citta" class="form-control" name="citta"  value="{!! Input::old('citta',$user->citta) !!}" />
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-2 control-label" for="provincia"><?= LForm::province() ?></label>
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon">
                        <?= FA::webApplication_Map("fa-fw text-primary") ?>
                    </span>
                    <input type="text" placeholder="<?= LForm::city_placeholder() ?>" id="provincia" class="form-control" name="provincia"  value="{!! Input::old('provincia',$user->provincia) !!}" />
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="stato"><?= LForm::country() ?></label>
            <div class="col-md-6">
                {!! Form::select('stato', \Mbcraft\Form\FormHelper::countries(),Input::old('stato',$user->stato),array('class' => 'form-control select2', 'id' => 'field_stato')) !!}
            </div>
        </div>
    </div>
</div>