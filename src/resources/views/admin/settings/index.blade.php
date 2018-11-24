<?php

use App\Lang\Settings\LPages;
use App\Lang\Settings\LMenu;
use App\Lang\Settings\LForm;
use App\Lang\Settings\LTable;
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
        <li><a href="<?= Routes::admin_settings_index() ?>"><?= LMenu::root() ?></a></li>
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
                        <?= FA::webApplication_Wrench() ?>
                        <?= LTable::list_() ?>
                    </h3>
                </div>
                <div class="panel-body">
                    <table class="table" id="table">
                        <thead>
                            <tr class="filters">
                                <th><?= LForm::key() ?></th>
                                <th><?= LForm::value() ?></th>
                                <th><?= LForm::context() ?></th>
                                <th><?= LForm::editable_label() ?></th>
                                <th><?= LForm::updatedAt() ?></th>
                                <th><?= LForm::actions() ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($settings as $setting)
                            <tr>
                                <td>{!! $setting->key !!}</td>
                                <td style="font-size:10px;">{!! str_replace(",",",<br />",str_replace("=","=<br />",$setting->value)) !!}</td>
                                <td>{!! $setting->context !!}</td>
                                <td>{!! LForm::editable_values($setting->editable) !!}</td>
                                <td>{!! $setting->updated_at->diffForHumans() !!}</td>
                                <td>
                                    @ican('manage',$setting)
                                        @if($setting->editable)
                                            @include('form/parts/edit_action',['lform' => LForm::class])
                                        @endif
                                        @include('form/parts/show_action',['lform' => LForm::class])
                                    @endcan
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>    <!-- row-->
</section>
@endsection