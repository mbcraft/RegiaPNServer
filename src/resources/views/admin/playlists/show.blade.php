<?php

use App\Lang\Playlists\LForm;
use App\Lang\Playlists\LMenu;
use App\Lang\Playlists\LTable;
use App\Lang\Playlists\LPages;

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
            <li><a href="<?= Routes::admin_playlists_index() ?>"><?= LMenu::root() ?></a></li>
            <li>
                <?= LMenu::show() ?>
            </li>
        </ol>
    </section>
    <!-- Main content -->
    
    <section class="content paddingleft_right15">
        <div class="row">
            <div class="col-md-12">
                <div class='panel panel-primary'>
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <?= FA::webApplication_Music() ?>
                            <?= LTable::showDetails() ?>
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-8">
                            <table class="table details-table">
                                <tbody>
                                    <tr>
                                        <td class="text-primary"><?= \App\Lang\Customers\LForm::uniqueLabel() ?></td>
                                        <td>{!! $playlist->player->cliente->unique_label !!}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary"><?= LForm::playerLabelId() ?></td>
                                        <td><a href="{!! Routes::admin_players_show($playlist->player->id) !!}">{!! $playlist->player->unique_label." (".$playlist->player_id.")" !!}</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary"><?= LForm::title() ?></td>
                                        <td>{!! $playlist->titolo !!}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary"><?= LForm::totalDuration() ?></td>
                                        <td>{!! $playlist->getTotalDuration() !!}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary"><?= LForm::status_label() ?></td>
                                        <td>{!! LForm::status_values($playlist->stato) !!}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary"><?= LForm::note() ?></td>
                                        <td>{!! $playlist->note !!}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                @include("admin.playlists._track_list",["tracks" => $playlist->orderedElements()])
            </div>
        </div>    
    </section>
@endsection