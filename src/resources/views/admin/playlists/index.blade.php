<?php

use App\Lang\Playlists\LForm;
use App\Lang\Playlists\LPages;
use App\Lang\Playlists\LTable;
use App\Lang\Playlists\LMenu;
use App\Lang\Playlists\LModal;
use App\Lang\Playlists\LMessage;
use Mbcraft\Utils\HtmlHelper;
use App\Models\Player;
?>

@extends('admin/layouts/default')

@include("widgets/datatables/setup")
@include("widgets/form_elements/setup")

{{-- Page title --}}
@section('title')
<?= LPages::list_() ?>
@parent
@endsection

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
        <li><a href="<?= Routes::admin_playlists_index() ?>"><?= LMenu::root() ?></a></li>
        <li>
            <?= LMenu::list_() ?>
        </li>
    </ol>
</section>

<!-- Main content -->
<section class="content paddingleft_right15">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary ">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <?= FA::webApplication_Reorder() ?>
                        <?= isset($player_id) ? LTable::listForPlayer()." : ".Player::getShortDescriptionById($player_id) : LTable::list_() ?> 
                    </h3>
                </div>
                <div class="panel-body">
                    <table class="table" id="table">
                        <thead>
                            <tr class="filters">
                                <th><?= LForm::title() ?></th>
                                <th><?= LForm::duration() ?></th>
                                <th><?= LForm::status_label() ?></th>
                                <th><?= LForm::createdAt() ?></th>
                                <th><?= LForm::actions() ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($playlists as $playlist)
                            <tr>
                                <td>{!! $playlist->titolo !!}</td>
                                <td>{!! $playlist->getTotalDuration() !!}</td>
                                <td><?= LForm::status_values($playlist->stato) ?></td>
                                <td>{!! $playlist->created_at->diffForHumans() !!}</td>
                                <td>
                                    @ican('manage',$playlist)
                                        @include("form/parts/edit_action",["lform" => LForm::class])
                                        @include('form/parts/confirm_delete_action',["lform" => LForm::class])
                                    @endcan
                                    @include("form/parts/show_action",["lform" => LForm::class])
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @ifdef("player_id")
                <?php
                $pp = \App\Models\Player::findOrFail($player_id);
                ?>
                @ican('createPlaylist',new \App\Models\Player())
                <div class="panel" align="right">
                    <a href="{{ Routes::admin_playlists_create(["player_id" => $player_id]) }}">Crea nuova playlist</a>
                </div>
                @endcan
            @endif
            
        </div>
    </div>    <!-- row-->
</section>
@stop
