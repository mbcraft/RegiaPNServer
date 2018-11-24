<?php

use App\Lang\Players\LForm;
use App\Lang\Players\LPages;
use App\Lang\Players\LTable;
use App\Lang\Players\LMenu;
use App\Models\Cliente;
?>

@extends('admin/layouts/default')

@include("widgets/datatables/setup")

{{-- Page title --}}
@section('title')
<?= LPages::list_() ?>
@parent
@stop

{{-- Page content --}}
@section('content')
<section class="content-header">
    <h1><?= LPages::list_() ?></h1>
    <ol class="breadcrumb">
        <li>
            <a href="<?= Routes::dashboard() ?>">
                <?= FA::webApplication_Home() ?>
                <?= LMenu::home() ?>
            </a>
        </li>
        <li><?= LMenu::root() ?></li>
        <li>
            <a href="<?= Routes::admin_players_index() ?>"><?= LMenu::list_() ?></a>
        </li>
    </ol>
</section>

<!-- Main content -->
<section class="content paddingleft_right15">
    <div class="row">
        <div class="col-lg-12">
            <div class="btn-group" role="group" aria-label="...">
                <?= Mbcraft\Utils\HtmlHelper::trashedButtons(Routes::admin_players_index(), "App\Models\Player", "players") ?>
            </div>
            <br />&nbsp;
            <div class="panel panel-primary ">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <?= FA::videoPlayer_Play_circle() ?>
                        <?= isset($cliente_id) ? LTable::listForCustomer()." : ".Cliente::getShortDescriptionById($cliente_id) : LTable::list_() ?> 
                    </h3>
                </div>
                @if_has_elements($players)
                <div class="panel-body">
                    <table class="table" id="table">
                        <thead>
                            <tr class="filters">
                                <th><?= LForm::uniqueLabel() ?></th>
                                <th><?= LForm::location() ?></th>
                                <th><?= LForm::status_label() ?></th>
                                <th><?= LForm::createdAt() ?></th>
                                <th><?= LForm::actions() ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($players as $player)
                            <tr>
                                <td>{!! $player->unique_label !!}</td>
                                <td>
                                    {!! $player->indirizzo !!},<br />
                                    {!! $player->cap !!} - {!! $player->citta !!}<br />
                                    {!! $player->provincia !!}<br />
                                    {!! $player->stato !!}
                                </td>
                                <td>{!! LForm::status_values($player->status) !!}</td>
                                <td>{!! $player->created_at->diffForHumans() !!}</td>
                                <td>

                                    @if(!$player->trashed()) 
                                        @ican('manage',$player)
                                            @include('form/parts/edit_action',["lform" => LForm::class])
                                            @include('form/parts/confirm_delete_action',["lform" => LForm::class])
                                        @endcan
                                        @include('form/parts/show_action',["lform" => LForm::class])
                                        <!-- generate update action -->
                                        <form name="form_generate_update_package" class="action_button" action="<?= Routes::admin_players_generateUpdatePackage($player->id) ?>" method="POST">
                                            {!! Form::token() !!}
                                            <button type="image" title="<?= LForm::generateUpdatePackage_tooltip() ?>" class="action_button" onclick="this.form.submit();"><?= FA::webApplication_Puzzle_piece("fa-fw text-info") ?></button>
                                        </form><!-- view player notifications action --><a href="<?= Routes::{"admin_" . $many_entities_route . "_playerNotifications"}($player->id) ?>"><?= FA::webApplication_Exclamation("fa-fw text-primary", LForm::playerNotifications_tooltip()) ?></a>
                                        <!-- view player spots action -->
                                        <a href="<?= Routes::{"admin_" . $many_entities_route . "_spots"}($player->id) ?>"><?= FA::webApplication_File_sound_o("fa-fw text-info", LForm::spots_tooltip()) ?></a>
                                        <!-- view player playlists action -->
                                        @ican('indexPlaylists',$player)
                                            <a href="<?= Routes::{"admin_" . $many_entities_route . "_playlists"}($player->id) ?>"><?= FA::webApplication_Tasks("fa-fw text-info", LForm::playlists_tooltip()) ?></a>
                                        @endcan
                                        <!-- create new playlist action -->
                                        @ican('createPlaylist',$player)
                                            <form name="form_create_playlist" class="action_button" action="<?= Routes::admin_playlists_create() ?>" method="GET">
                                                {!! Form::token() !!}
                                                <input type="hidden" name="player_id" value="<?= $player->id ?>" />
                                                <button type="image" title="<?= LForm::createPlaylist_tooltip() ?>" class="action_button" onclick="this.form.submit();"><?= FA::webApplication_Reorder("fa-fw text-info") ?></button>
                                            </form>
                                        @endcan
                                    @else
                                        @ican('manage',$player)
                                            @include("form/parts/index_deleted_row_actions",["lform" => LForm::class])
                                        @endcan
                                    @endif

                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                @else
                <div class="panel-body">
                    <?= LTable::noEntities() ?>
                </div>
                @endif
                
            </div>
        </div>
    </div>    <!-- row-->
</section>
@stop