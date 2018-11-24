<?php

use App\Lang\Settings\LPages;
use App\Lang\Settings\LMenu;
use App\Lang\Settings\LTable;

?>
@extends('admin/layouts/default')

@include('widgets/form_elements/setup')

{{-- Page title --}}
@section('title')
Edit Setting
@parent
@stop


{{-- Page content --}}
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1><?= LPages::edit() ?></h1>
    <ol class="breadcrumb">
        <li>
            <a href="<?= Routes::dashboard() ?>">
                <?= FA::webApplication_Home() ?>
                <?= LMenu::home() ?>
            </a>
        </li>
        <li><a href="<?= Routes::admin_settings_index() ?>"><?= LMenu::root() ?></a></li>
        <li>
            <a href="<?= Routes::admin_settings_edit() ?>"><?= LMenu::edit() ?></a>
        </li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-fw fa-edit"></i>
                        <?= LMenu::edit() ?>
                    </h3>
                </div>
                <div class="panel-body">
                    <!--main content-->
                    <div class="position-center">
                        @if($errors->has())
                        @foreach ($errors->all() as $error)
                        <div class="text-danger">{{ $error }}</div>
                        @endforeach
                        @endif
                        <div>
                            <h3 class="text-primary"><?= LTable::edit() ?></h3>
                        </div>
                        <form role="form" class="form-horizontal" enctype="multipart/form-data" method="POST" action='<?= Routes::admin_settings_edit_do() ?>'>
                            <input type='hidden' name='id' value='{!! $setting->id !!}' />
                            @include('admin/settings/_form',["setting" => $setting])
                            @ican('manage',$setting)
                                @include('form/parts/edit_buttons')
                            @endcan
                        </form>
                    </div>
                    <!--main content end--> </div>
            </div>
        </div>
    </div>
    <!--row end-->
</section>
@endsection