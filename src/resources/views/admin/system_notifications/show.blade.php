<?php

use App\Lang\SystemNotifications\LMenu;
use App\Lang\SystemNotifications\LForm;
use App\Lang\SystemNotifications\LPages;
use App\Lang\SystemNotifications\LTable;

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
        <li>
            <?= App\Lang\System\LMenu::root() ?>
        </li>
        <li>
            <a href="<?= Routes::admin_systemNotifications_index() ?>">
                <?= LMenu::root() ?>
            </a>
        </li>
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
                    <div class="prf-contacts sttng">
                        <h3 class="text-primary"><?= LTable::show() ?></h3>
                    </div>
                    <div class="col-md-8">
                        <table class="table details-table">
                            <tbody>

                                <tr>
                                    <td class="text-primary"><?= LForm::type_label() ?></td>
                                    <td><?= LForm::type_values($system_notification->type) ?></td>
                                </tr>

                                <tr>
                                    <td class="text-primary"><?= LForm::message() ?></td>
                                    <td>{!! $system_notification->message !!} </td>
                                </tr>

                                <tr>
                                    <td class="text-primary"><?= LForm::active_label() ?></td>
                                    <td>
                                        @if($system_notification->deleted_at)
                                        <span class="label label-danger"><?= LForm::active_values_0() ?></span>
                                        @else
                                        <span class="label label-success"><?= LForm::active_values_1() ?></span>
                                        @endif
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td class="text-primary"><?= LForm::readed_label() ?></td>
                                    <td><?= LForm::readed_values($system_notification->readed) ?></td>
                                </tr>

                                <tr>
                                    <td class="text-primary"><?= LForm::createdAt() ?></td>
                                    <td>{!! $system_notification->created_at->format("H:i:s d-m-Y") !!}</td>
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
