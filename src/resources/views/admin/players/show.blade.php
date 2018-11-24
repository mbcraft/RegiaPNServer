<?php

use App\Lang\Players\LForm;
use App\Lang\Players\LPages;
use App\Lang\Players\LTable;
use App\Lang\Players\LMenu;

?>

@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
<?= LPages::show() ?>
@parent
@stop


{{-- Page content --}}
@section('content')
<section class="content-header">
    <h1><?= LPages::show() ?></h1>
    <ol class="breadcrumb">
        <li>
            <a href="<?= Routes::dashboard() ?>">
                <?= FA::webApplication_Home() ?>
                <?= LMenu::home() ?>
            </a>
        </li>
        <li><a href="<?= Routes::admin_players_index() ?>"><?= LMenu::root() ?></a></li>
        <li>
            <?= LMenu::show() ?>
        </li>
    </ol>
</section>
<!-- Main content -->
<section class="content paddingleft_right15">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <div class="col-md-8">
                        
                        <div class="prf-contacts sttng">
                            <h3 class="text-primary"><?= LTable::show() ?></h3>  
                        </div>
                        
                        <table class="table details-table">
                            <tbody>
                                <tr>
                                    <td class="text-primary"><?= LForm::id() ?></td>
                                    <td>{!! $player->id !!}</td>
                                </tr>
                                
                                <tr>
                                    <td class="text-primary"><?= LForm::customerUniqueLabel() ?></td>
                                    <td>{!! $player->cliente()->firstOrFail()->unique_label !!}</td>
                                </tr>

                                <tr>
                                    <td class="text-primary"><?= LForm::playlistsDj() ?></td>
                                    <td>{!! $player->getPlaylistsDjDescription() !!}</td>
                                </tr>

                                <tr>
                                    <td class="text-primary"><?= LForm::uniqueLabel() ?></td>
                                    <td>{!! $player->unique_label !!}</td>
                                </tr>

                                <tr>
                                    <td class="text-primary"><?= LForm::registrationCode() ?></td>
                                    <td>{!! $player->registration_code !!}</td>
                                </tr>
                                
                                <tr>
                                    <td class="text-primary"><?= LForm::apiPassword() ?></td>
                                    <td>{!! $player->api_password !!}</td>
                                </tr>

                                <tr>
                                    <td class="text-primary"><?= LForm::status_label() ?></td>
                                    <td>{!! LForm::status_values($player->status) !!}</td>
                                </tr>

                                <tr>
                                    <td class="text-primary"><?= LForm::address() ?></td>
                                    <td>{!! $player->indirizzo !!} <br />
                                        {!! $player->cap !!} - {!! $player->citta !!} ({!! $player->provincia !!})<br />
                                        {!! $player->stato !!}
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-primary"><?= LForm::note() ?></td>
                                    <td>{!! $player->note !!}</td>
                                </tr>

                                <tr>
                                    <td class="text-primary"><?= LForm::timeZone() ?></td>
                                    <td>{!! $player->time_zone !!}</td>
                                </tr>

                                <tr>
                                    <td class="text-primary"><?= LForm::playStartTime() ?></td>
                                    <td>{!! $player->play_start_time !!}</td>
                                </tr>

                                <tr>
                                    <td class="text-primary"><?= LForm::playEndTime() ?></td>
                                    <td>{!! $player->play_end_time !!}</td>
                                </tr>

                                <tr>
                                    <td class="text-primary"><?= LForm::playEndTimeDayOffset_label() ?></td>
                                    <td>{!! LForm::playEndTimeDayOffset_values($player->play_end_time_day_offset) !!}</td>
                                </tr>

                                <tr>
                                    <td class="text-primary"><?= LForm::checkPlayMinutesInterval() ?></td>
                                    <td>{!! $player->check_play_minutes_interval !!}</td>
                                </tr>

                                <tr>
                                    <td class="text-primary"><?= LForm::filesUpdateTime() ?></td>
                                    <td>{!! $player->files_update_time !!}</td>
                                </tr>
                                
                                <tr>
                                    <td class="text-primary"><?= LForm::loopPlaylist_label() ?></td>
                                    <td>{!! LForm::loopPlaylist_values($player->loop_playlist) !!}</td>
                                </tr>

                                <tr>
                                    <td class="text-primary"><?= LForm::securityToken() ?></td>
                                    <td>{!! $player->security_token !!}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@stop