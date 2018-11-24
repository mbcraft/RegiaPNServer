<?php
use App\Lang\Songs\LTable;
use App\Lang\Songs\LForm;

$one_entity = 'song';
?>
<div class="panel panel-primary ">
    <div class="panel-body">
        <table class="table" id="table">
            <thead>
            <tr class="filters">
                <th>{{ lang('songs/form.nome_canzone') }}</th>
                <th>{{ lang('songs/form.metadata_status.label') }}</th>
                <th>{{ lang('songs/form.crypted.label') }}</th>
                <th>{{ lang('songs/form.duration') }}</th>
                <th>{{ lang('songs/form.created_at') }}</th>
                <th>{{ lang('songs/form.actions') }}</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($songs as $song)
                <tr>
                    <td class="smaller">{!! $song->nome_canzone !!}</td>
                    <td class="smaller" align='center'>{!! lang('songs/form.metadata_status.values.'.$song->metadata_status) !!}</td>
                    <td class="smaller" align='center'>{!! lang('songs/form.crypted.values.'.$song->crypted) !!}</td>
                    <td class="smaller">{!! $song->duration!=null ? $song->duration : "-" !!}</td>
                    <td class="smaller">{!! $song->created_at->diffForHumans() !!}</td>
                    <td align='center'>
                        @include("form/parts/show_action",["lform" => LForm::class])
                        @ican('delete',$song)
                            @include("form/parts/confirm_delete_action",["lform" => LForm::class])
                        @endcan
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
</div>