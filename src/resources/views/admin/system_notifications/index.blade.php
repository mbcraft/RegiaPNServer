<?php

use App\Lang\SystemNotifications\LPages;
use App\Lang\SystemNotifications\LTable;
use App\Lang\SystemNotifications\LForm;
use App\Lang\SystemNotifications\LMenu;

$lform = 'App\Lang\SystemNotifications\LForm';
$lpagination = 'App\Lang\LPagination';

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
            <li><?= App\Lang\System\LMenu::root() ?></li>
            <li><a href="<?= Routes::admin_systemNotifications_index() ?>"><?= LMenu::root() ?></a></li>
            <li>
                <?= LMenu::list_() ?>
            </li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content paddingleft_right15">
        <div class="row">
            <div class="col-lg-12">
                @include('form/parts/index_buttons',["plural_entity_name" => "notifiche di sistema"])
                <br />&nbsp;
                <div class="panel panel-primary ">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-fw fa-bell-o"></i>
                        <?= LTable::list_() ?>
                    </h3>
                </div>
                <div class="panel-body">
                    <table class="table" id="table">
                        <thead>
                        <tr class="filters">
                            <th><?= LForm::type_label() ?></th>
                            <th><?= LForm::message() ?></th>
                            <th><?= LForm::active_label() ?></th>
                            <th><?= LForm::readed_label() ?></th>
                            <th><?= LForm::createdAt() ?></th>
                            <th><?= LForm::actions() ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($system_notifications as $system_notification)
                            <tr>
                                <td><?= LForm::type_values($system_notification->type) ?></td>
                                <td>{!! $system_notification->message !!}</td>
                                <td>
                                    @if($system_notification->trashed())
                                        <?= LForm::active_values_0() ?>
                                    @else
                                        <?= LForm::active_values_1() ?>
                                    @endif
                                </td>
                                <td>
                                    @if($system_notification->readed)
                                        <?= LForm::readed_values_1() ?>
                                    @else
                                        <?= LForm::readed_values_0() ?>
                                    @endif
                                </td>
                                <td>{!! $system_notification->created_at->format("H:i:s d-m-Y") !!}</td>
                                <td>
                                    @ican('manage',$system_notification)
                                        @if(!$system_notification->trashed())

                                            @include('form/parts/confirm_delete_action',['lform' => LForm::class])

                                            @include('form/parts/show_action',['lform' => LForm::class])

                                        @endif
                                    @endcan
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
                    <form method="POST" action="<?= Routes::admin_systemNotifications_deleteAllReaded_do() ?>">
                        {!!  Form::token() !!}
                        <input type="submit" class="btn btn-primary" name="delete_all_readed" value="{{ lang('button.delete_all_readed') }}" />
                    </form>
                </div>
            </div>
        </div>    <!-- row-->
    </section>
@stop