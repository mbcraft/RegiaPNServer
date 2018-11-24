<?php

use App\Lang\Spots\LTable;
use App\Lang\Spots\LForm;
use App\Models\Player;
?>
<div class="panel panel-primary ">
    <div class="panel-heading">
        <h3 class="panel-title">
        <?= Fa::webApplication_File_sound_o() ?>
        <?= isset($player_id) ? LTable::listForPlayer()." : ".Player::getShortDescriptionById($player_id) : LTable::list_() ?> 
        </h3>
    </div>
    <div class="panel-body">
        <table class="table" id="table">
            <thead>
                <tr class="filters">
                    <th>{{ lang('spots/form.nome_spot') }}</th>
                    <th>{{ lang('spots/form.metadata_status.label') }}</th>
                    <th>{{ lang('spots/form.crypted.label') }}</th>
                    <th>{{ lang('spots/form.duration') }}</th>
                    <th>{{ lang('spots/form.player_id') }}</th>
                    <th>{{ lang('spots/form.created_at') }}</th>
                    <th>{{ lang('spots/form.actions') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spots as $spot)
                <tr>
                    <td class="smaller">{!! $spot->nome_spot !!}</td>
                    <td class="smaller" align='center'>{!! lang('spots/form.metadata_status.values.'.$spot->metadata_status) !!}</td>
                    <td class="smaller" align='center'>{!! lang('spots/form.crypted.values.'.$spot->crypted) !!}</td>
                    <td class="smaller">{!! $spot->duration!=null ? $spot->duration : "-" !!}</td>
                    <td class="smaller">{!! $spot->player_id !!}</td>
                    <td class="smaller">{!! $spot->created_at->diffForHumans() !!}</td>
                    <td align='center'>  
                        @include("form/parts/show_action",["lform" => LForm::class])
                        @ican('delete',$spot)
                            @include("form/parts/confirm_delete_action",["lform" => LForm::class])
                        @endcan
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>