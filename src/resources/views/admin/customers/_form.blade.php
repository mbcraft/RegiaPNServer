<?php

use App\Lang\Customers\LForm;
use App\Lang\Customers\LTable;

use Mbcraft\Form\FormHelper;

?>
{!! Form::token() !!}
<div class="prf-contacts sttng">
    <h3 class="text-primary"><?= LTable::keys() ?></h3>  
</div>

<div class="cd-block">
    <div class="cd-content">
        <div class="form-group">
            <label class="col-lg-2 control-label" for="unique_label"><?= LForm::uniqueLabel() ?></label>
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon">
                         <?= FA::webApplication_Folder_open_o("fa-fw text-primary") ?>
                    </span>
                    <input type="text" placeholder="<?= LForm::uniqueLabel_placeholder() ?>" name="unique_label" id="unique_label" class="form-control" value="{!! Input::old('unique_label',$customer->unique_label) !!}" required="" />
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
                        <input type="text" name="security_token" id="ff_security_token" class="form-control" value="{!! Input::old('security_token',$customer->security_token) !!}" readonly="readonly" />
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<div class="prf-contacts sttng">
    <h3 class="text-primary"><?= LTable::control() ?></h3>  
</div>

<div class="cd-block">
    <div class="cd-content">
        <div class="form-group">
            <label class="col-lg-2 control-label" for="owner"><?= LForm::owner() ?></label>
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon">
                         <?= FA::webApplication_Hand_grab_o("fa-fw text-primary") ?>
                    </span>
                    @if($create)
                        <input type="hidden" name="owner_id" id="owner" value="{!! Sentinel::getUser()->getUserId() !!}" />
                        <input type="text" name="ff_owner_id" id="ff_owner" class="form-control" value="{!! Sentinel::getUser()->first_name." ".Sentinel::getUser()->last_name !!}" required="" readonly="readonly" />
                    @else
                    <select class="form-control select2" title="<?= LForm::owner() ?>" name="owner_id" id="owner" required="">
                        @foreach($users as $user)
                        <option value="{{ $user->id }}" @if(Input::old('owner_id',$customer->owner_id)==$user->id) selected="selected" @endif >{{ $user->first_name }} {{ $user->last_name }}</option>
                        @endforeach
                    </select>
                    @endif
                </div>
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-lg-2 control-label" for="manager"><?= LForm::manager() ?></label>
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon">
                        <?= FA::webApplication_Hand_pointer_o("fa-fw text-primary") ?>
                    </span>
                    <select class="form-control select2" title="<?= LForm::manager() ?>" name="manager_id" id="manager" required="">
                        @foreach($users as $user)
                        <option value="{{ $user->id }}" @if(Input::old('manager_id',$customer->manager_id)==$user->id) selected="selected" @endif >{{ $user->first_name }} {{ $user->last_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    <h3 class="text-primary"><?= LTable::business() ?></h3>
</div>

<div class="cd-block">
    <div class="cd-content">
        <div class="form-group">
            <label class="col-lg-2 control-label" for="nome"><?= LForm::firstName() ?></label>
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-fw fa-user-md text-primary"></i>
                    </span>
                    <input type="text" placeholder="<?= LForm::firstName_placeholder() ?>" name="nome" id="nome" class="form-control" value="{!! Input::old('nome',$customer->nome) !!}" required="" />
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-2 control-label" for="cognome"><?= LForm::lastName() ?></label>
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-fw fa-user-md text-primary"></i>
                    </span>
                    <input type="text" placeholder="<?= LForm::lastName_placeholder() ?>" name="cognome" id="cognome" class="form-control" value="{!! Input::old('cognome',$customer->cognome) !!}" required="" />
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-2 control-label" for="ragione_sociale"><?= LForm::companyName() ?></label>
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon">
                        <?= FA::webApplication_Bank("fa-fw text-primary") ?>
                    </span>
                    <input type="text" placeholder="<?= LForm::companyName_placeholder() ?>" name="ragione_sociale" id="ragione_sociale" class="form-control" value="{!! Input::old('ragione_sociale',$customer->ragione_sociale) !!}" required="" />
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-2 control-label" for="p_iva"><?= LForm::vat() ?></label>
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon">
                        <?= FA::webApplication_Pie_chart("fa-fw text-primary") ?>
                    </span>
                    <input type="text" placeholder="<?= LForm::vat_placeholder() ?>" name="p_iva" id="p_iva" class="form-control" value="{!! Input::old('p_iva',$customer->p_iva) !!}" />
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-2 control-label" for="codice_fiscale"><?= LForm::fiscalCode() ?></label>
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon">
                        <?= FA::webApplication_Balance_scale("fa-fw text-primary") ?>
                    </span>
                    <input type="text" placeholder="<?= LForm::fiscalCode_placeholder() ?>" name="codice_fiscale" id="codice_fiscale" class="form-control" value="{!! Input::old('codice_fiscale',$customer->codice_fiscale) !!}" />
                </div>
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
                <textarea rows="5" cols="30" class="form-control" placeholder="<?= LForm::address_placeholder() ?>" id="indirizzo" name="indirizzo">{!! Input::old('indirizzo',$customer->indirizzo) !!}</textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-2 control-label" for="cap"><?= LForm::postal() ?></label>
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon">
                        <?= FA::webApplication_Map_pin("fa-fw text-primary") ?>
                    </span>
                    <input type="text" placeholder="<?= LForm::postal_placeholder() ?>" id="cap" class="form-control" name="cap"  value="{!! Input::old('cap',$customer->cap) !!}" />
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
                    <input type="text" placeholder="<?= LForm::city_placeholder() ?>" id="citta" class="form-control" name="citta"  value="{!! Input::old('citta',$customer->citta) !!}" />
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
                    <input type="text" placeholder="<?= LForm::province_placeholder() ?>" id="provincia" class="form-control" name="provincia"  value="{!! Input::old('provincia',$customer->provincia) !!}" />
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="stato"><?= LForm::country() ?></label>
            <div class="col-md-6">
                {!! Form::select('stato', \Mbcraft\Form\FormHelper::countries(),Input::old('stato',$customer->stato),array('class' => 'form-control select2', 'id' => 'field_stato')) !!}
            </div>
        </div>

    </div>
</div>
<div class="prf-contacts sttng">
    <h3 class="text-primary"><?= LTable::contacts() ?></h3>
</div>
<div class="cd-block">
    <div class="cd-content">
        <div class="form-group">
            <label class="col-lg-2 control-label" for="email"><?= LForm::email() ?></label>
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-fw fa-envelope text-primary"></i>
                    </span>
                    <input type="text" placeholder="<?= LForm::email_placeholder() ?>" id="email" name="email" class="form-control" value="{!! Input::old('email',$customer->email) !!}"></div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-2 control-label" for="telefono"><?= LForm::phone() ?></label>
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-fw fa-phone text-primary"></i>
                    </span>
                    <input type="text" placeholder="<?= LForm::phone_placeholder() ?>" id="telefono" name="telefono" class="form-control" value="{!! Input::old('telefono',$customer->telefono) !!}" />
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-2 control-label" for="sito_web"><?= LForm::webSite() ?></label>
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon">
                        <?= FA::webApplication_Sitemap("fa-fw text-primary")?>
                    </span>
                    <input type="text" placeholder="<?= LForm::webSite_placeholder() ?>" id="sito_web" name="sito_web" class="form-control" value="{!! Input::old('sito_web',$customer->sito_web) !!}" />
                </div>
            </div>
        </div>

    </div>
</div>

<div class="prf-contacts sttng">
    <h3 class="text-primary"><?= LTable::other() ?></h3>
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
                    <textarea id="note" name="note" class="form-control" rows="4" placeholder="<?= LForm::note_placeholder() ?>">{!! Input::old('note',$customer->note) !!}</textarea>
                </div>
            </div>
        </div>
    </div>
</div>
