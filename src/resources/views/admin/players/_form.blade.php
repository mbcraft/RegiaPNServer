<?php

use App\Lang\Players\LForm;
use App\Lang\Players\LTable;

use App\Models\Auth\User;

?>

@include("widgets/form_elements/setup")
@include("widgets/pickers/setup")

{!! Form::token() !!}



<div class="prf-contacts sttng">
    <h3 class="text-primary"><?= LTable::general() ?></h3>
</div>

<div class="cd-block">
    <div class="cd-content">

        <div class="form-group">
            <label class="col-lg-2 control-label" for="ff_unique_label"><?= LForm::uniqueLabel() ?></label>
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon">
                        <?= FA::webApplication_Folder_o("fa-fw text-primary") ?>
                    </span>
                    <input type="text" id="ff_unique_label" placeholder="<?= LForm::uniqueLabel_placeholder() ?>" name="unique_label" class="form-control" value="{!! Input::old('unique_label',$player->unique_label) !!}" required="required" />
                </div>
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-lg-2 control-label" for="ff_registration_code"><?= LForm::registrationCode() ?></label>
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon">
                        <?= FA::webApplication_Key("fa-fw text-primary") ?>
                    </span>
                    <input type="text" id="ff_registration_code" placeholder="<?= LForm::registrationCode_placeholder() ?>" name="registration_code" class="form-control" value="{!! Input::old('registration_code',$player->registration_code) !!}" required="" />
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-2 control-label" for="ff_status"><?= LForm::status_label() ?></label>
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon">
                        <?= FA::webApplication_Square("fa-fw text-primary") ?>
                    </span>
                    @if($create)
                    <input type='hidden' name='status' value='UNREGISTERED' />
                    <input type='text' id="ff_status" name='_status_mock' class="form-control" value='<?= LForm::status_values_UNREGISTERED() ?>' readonly='readonly' />
                    @else
                    {!! Form::select('status', LForm::status_values() ,Input::old('status',$player->status),array('class' => 'form-control select2', 'id' => 'field_status')) !!}
                    @endif
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-2 control-label" for="ff_api_password"><?= LForm::apiPassword() ?></label>
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon">
                        <?= FA::webApplication_Key("fa-fw text-primary") ?>
                    </span>
                    <input type="text" placeholder="<?= LForm::apiPassword_placeholder() ?>" name="api_password" id="ff_api_password" class="form-control" value="{!! Input::old('api_password',$player->api_password) !!}" />
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-2 control-label" for="ff_security_token"><?= LForm::securityToken() ?></label>
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon">
                        <?= FA::webApplication_Key("fa-fw text-primary") ?>
                    </span>
                    @if($create)
                        <input type="text" name="security_token" id="ff_security_token" class="form-control" value="<?= md5("TOKEN_".time()) ?>" readonly="readonly" />
                    @else
                        <input type="text" name="security_token" id="ff_security_token" class="form-control" value="{!! Input::old('security_token',$player->security_token) !!}" readonly="readonly" />
                    @endif
                </div>
            </div>
        </div>

        <div class="form-group mar-20">
            <label for="ff_playlists_dj_id" class="control-label col-md-2"><?= LForm::playlistsDj() ?></label>
            <div class="col-md-6">
                {!! Form::select('playlists_dj_id', \Mbcraft\Form\FormHelper::fromUsers(User::getAllPlaylistEditor(),LForm::playlistsDj_placeholder()) ,Input::old('playlists_dj_id',$player->playlists_dj_id),array('class' => 'form-control select2', 'id' => 'ff_playlists_dj_id')) !!}
            </div>
        </div>
        
    </div>
</div>

<div class="prf-contacts sttng">
    <h3 class="text-primary"><?= LTable::location() ?></h3>
</div>
<div class="cd-block">
    <div class="cd-content">
        <div class="form-group">
            <label class="col-lg-2 control-label" for="indirizzo"><?= LForm::address() ?></label>
            <div class="col-lg-6">
                <textarea rows="5" cols="30" class="form-control" placeholder="<?= LForm::address_placeholder() ?>" id="indirizzo" name="indirizzo">{!! Input::old('indirizzo',$player->indirizzo) !!}</textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-2 control-label" for="cap"><?= LForm::postal() ?></label>
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon">
                        <?= FA::webApplication_Map_pin("fa-fw text-primary") ?>
                    </span>
                    <input type="text" id="cap" class="form-control" placeholder="<?= LForm::postal_placeholder() ?>" name="cap"  value="{!! Input::old('cap',$player->cap) !!}" />
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
                    <input type="text" placeholder="<?= LForm::city_placeholder() ?>" id="citta" class="form-control" name="citta"  value="{!! Input::old('citta',$player->citta) !!}" />
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
                    <input type="text" placeholder="<?= LForm::city_placeholder() ?>" id="provincia" class="form-control" name="provincia"  value="{!! Input::old('provincia',$player->provincia) !!}" />
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="stato"><?= LForm::country() ?></label>
            <div class="col-md-6">
                {!! Form::select('stato', \Mbcraft\Form\FormHelper::countries(),Input::old('stato',$player->stato),array('class' => 'form-control select2', 'id' => 'field_stato')) !!}
            </div>
        </div>

    </div>
</div>

<div class="cd-block">
    <div class="cd-content">
        <div class="form-group">
            <label class="col-lg-2 control-label" for="note"><?= LForm::note() ?></label>
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon">
                        <?= FA::webApplication_Sticky_note_o("fa-fw text-primary") ?>
                    </span>
                    <textarea id="note" name="note" class="form-control" rows="4" placeholder="<?= LForm::note_placeholder() ?>">{!! Input::old('note',$player->note) !!}</textarea>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="prf-contacts sttng">
    <h3 class="text-primary"><?= LTable::dates() ?></h3>
</div>
<div class="cd-block">
    <div class="cd-content">

        <div class="form-group mar-20">
            <label for="ff_time_zone" class="control-label col-md-2"><?= LForm::timeZone() ?></label>
            <div class="col-md-6">
                {!! Form::select('time_zone', \Mbcraft\Form\FormHelper::timeZones() ,Input::old('time_zone',$player->time_zone),array('class' => 'form-control select2', 'id' => 'time_zone')) !!}
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2"><?= LForm::playStartTime() ?></label>
            <div class="input-group clockpicker col-md-6" data-placement="left" data-align="top" data-autoclose="true">
                <input type="text" class="form-control" placeholder="<?= LForm::daytime_placeholder() ?>" name="play_start_time" value="{!! Input::old('play_start_time',$player->play_start_time) !!}" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-time"></span>
                </span>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2"><?= LForm::playEndTime() ?></label>
            <div class="input-group clockpicker col-md-6" data-placement="left" data-align="top" data-autoclose="true">
                <input type="text" class="form-control" placeholder="<?= LForm::daytime_placeholder() ?>" name="play_end_time" value="{!! Input::old('play_end_time',$player->play_end_time) !!}" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-time"></span>
                </span>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="play_end_time_day_offset"><?= LForm::playEndTimeDayOffset_label() ?></label>
            <div class="col-md-6">
                {!! Form::select('play_end_time_day_offset', array('0' => 'Stesso giorno','1' => 'Giorno successivo'),Input::old('play_end_time_day_offset',$player->play_end_time_day_offset),array('class' => 'form-control select2', 'id' => 'field_play_end_time_day_offset')) !!}
            </div>
        </div>
        
            <div class="form-group">
                <label class="control-label col-md-2"><?= LForm::checkPlayMinutesInterval() ?></label>
            <div class="col-md-6">
                {!! Form::select('check_play_minutes_interval', array('2' => 'Ogni 2 minuti','5' => 'Ogni 5 minuti','10' => 'Ogni 10 minuti','15' => 'Ogni 15 minuti','20' => 'Ogni 20 minuti'),Input::old('check_play_minutes_interval',$player->check_play_minutes_interval),array('class' => 'form-control select2', 'id' => 'field_check_play_minutes_interval')) !!}
            </div>
        </div>
        
        <div class="form-group">
            <label class="control-label col-md-2"><?= LForm::filesUpdateTime() ?></label>
            <div class="input-group clockpicker col-md-6" data-placement="left" data-align="top" data-autoclose="true">
                <input type="text" class="form-control" placeholder="<?= LForm::daytime_placeholder() ?>" name="files_update_time" value="{!! Input::old('files_update_time',$player->files_update_time) !!}" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-time"></span>
                </span>
            </div>
        </div>
        
        <div class="form-group">
            <label class="control-label col-md-2" for="ff_loop_playlist"><?= LForm::loopPlaylist_label() ?></label>
            <div align="left" class="input-group clockpicker col-md-6" data-placement="left" data-align="top" data-autoclose="true">
                <input type="hidden" name="loop_playlist" value="0" />
                {!! Form::checkbox("loop_playlist",1,Input::old('loop_playlist',$player->loop_playlist)) !!}
            </div>    
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="ff_start_from_beginning"><?= LForm::startFromBeginning_label() ?></label>
            <div align="left" class="input-group clockpicker col-md-6" data-placement="left" data-align="top" data-autoclose="true">
                <input type="hidden" name="start_from_beginning" value="0" />
                {!! Form::checkbox("start_from_beginning",1,Input::old('start_from_beginning',$player->start_from_beginning)) !!}
            </div>
        </div>

    </div>
</div>

<!--
<div class="prf-contacts sttng">
    <h3 class="text-primary">Other</h3>
</div>

<div class="cd-block">
    <div class="cd-content">


    </div>
</div>
-->