<?php

use App\Lang\Settings\LMenu;
use App\Lang\Settings\LPages;
use App\Lang\Settings\LForm;
use App\Lang\Settings\LTable;

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
        <li><a href='<?= Routes::admin_settings_index() ?>'><?= LMenu::root() ?></a></li>
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
                    <div class="col-md-12">
                        <div class="prf-contacts sttng">
                            <h3 class="text-primary"><?= LTable::show() ?></h3>
                        </div>
                        <table class="table details-table">
                            <tbody>
                                <tr>
                                    <td class="text-primary"><?= LForm::key() ?></td>
                                    <td>{!! $setting->key !!}</td>
                                </tr>
                                <tr>
                                    <td class="text-primary"><?= LForm::value() ?></td>
                                    <td>{!! $setting->value !!}</td>
                                </tr>                                
                                <tr>
                                    <td class="text-primary"><?= LForm::context() ?></td>
                                    <td>{!! $setting->context !!}</td>
                                </tr>                                
                                <tr>
                                    <td class="text-primary"><?= LForm::createdAt() ?></td>
                                    <td>{!! $setting->created_at->diffForHumans() !!}</td>
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