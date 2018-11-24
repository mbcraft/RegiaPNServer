<?php

use App\Lang\PlayerNotifications\LPages;
use App\Lang\PlayerNotifications\LMenu;
use App\Lang\PlayerNotifications\LForm;

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
                <a href="<?= Routes::admin_playerNotifications_index() ?>"><?= LMenu::list_() ?></a>
            </li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content paddingleft_right15">
        <div class="row">
            <div class="col-lg-12">
                <div class="btn-group" role="group" aria-label="...">
                    <?= \Mbcraft\Utils\HtmlHelper::trashedButtons(Routes::admin_playerNotifications_index(), "App\Models\PlayerNotification", "notifiche del player") ?>
                </div>
                <br />&nbsp;
                <div class="panel panel-primary ">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <?= FA::webApplication_Tasks() ?>
                        <?= LPages::list_() ?>
                    </h3>
                </div>
                <div class="panel-body">
                    <table class="table" id="table">
                        <thead>
                        <tr class="filters">
                            <th><?= LForm::message() ?></th>
                            <th><?= LForm::type_label() ?></th>
                            <th><?= LForm::active_label() ?></th>
                            <th><?= LForm::readed_label() ?></th>
                            <th><?= LForm::createdAt() ?></th>
                            <th><?= LForm::actions() ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($player_notifications as $player_notification)
                            <tr>
                                <td>{!! $player_notification->message !!}</td>
                                <td><?= LForm::type_values($player_notification->type) ?></td>
                                <td>
                                    @if($player_notification->trashed())
                                        <?= LForm::active_values_0() ?>
                                    @else
                                        <?= LForm::active_values_1() ?>
                                    @endif
                                </td>
                                <td>
                                    @if($player_notification->readed)
                                        <?= LForm::readed_values_1() ?>
                                    @else
                                        <?= LForm::readed_values_0() ?>
                                    @endif
                                </td>
                                <td>{!! $player_notification->created_at->format("H:i:s d-m-Y") !!}</td>
                                <td>
                                    @if(!$player_notification->trashed())
                                        @include("form/parts/confirm_delete_action",["lform" => LForm::class])
                                        @include("form/parts/show_action",["lform" => LForm::class])
                                    @else
                                        <!-- <a href="{{ route('admin.player_notifications.restore', $player_notification->id) }}"><i class="fa fa-fw fa-undo text-danger"></i></a> -->
                                    @endif
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            </div>
            <div class="form-group">
                <div class="col-lg-2">
                    <form method="POST" action="<?= Routes::admin_playerNotifications_deleteAllReaded_do() ?>">
                        {!! Form::token() !!}
                        <input type="submit" class="btn btn-primary" name="delete_all_readed" value="{{ lang('button.delete_all_readed') }}" />
                    </form>
                </div>
            </div>
        </div>    <!-- row-->
    </section>
@endsection