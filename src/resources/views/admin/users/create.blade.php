<?php

use App\Lang\Users\LPages;
use App\Lang\Users\LTable;
use App\Lang\Users\LMenu;

$user = new App\Models\Auth\User;

?>

@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    <?= LPages::create() ?>
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')

@parent

@require_local_css('assets/vendors/bootstrap-fileinput/css/fileinput.css')
@require_local_css('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css')
@require_local_css('assets/vendors/bootstrapvalidator/css/bootstrapValidator.min.css')
@require_local_css('assets/vendors/iCheck/css/minimal/blue.css')
@require_local_css('assets/vendors/select2/css/select2.css')
@require_local_css('assets/vendors/select2/css/select2-bootstrap.css')
@require_local_css('assets/css/custom_css/addnew_user.css')

@stop


{{-- Page content --}}
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1><?= LPages::create() ?></h1>
        <ol class="breadcrumb">
            <li>
                <a href="<?= Routes::dashboard() ?>">
                    <?= FA::webApplication_Home() ?>
                    <?= LMenu::home() ?>
                </a>
            </li>
            <li><?= LMenu::root() ?></li>
            <li>
                <a href="<?= Routes::admin_users_create() ?>"><?= LMenu::create() ?></a>
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
                            <i class="fa fa-fw fa-users"></i>
                            <?= LPages::create() ?>
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
                                <h3 class="text-primary"><?= LTable::create() ?></h3>
                            </div>
                            <form role="form" id="tryitForm" class="form-horizontal" enctype="multipart/form-data" method="POST" action="">
                                @include("admin/users/_form",["required_passwords" => true])
                                
                                @include("form/parts/create_buttons")
                            </form>
                        </div>
                        <!--main content end--> </div>
                </div>
            </div>
        </div>
        <!--row end-->
    </section>
@endsection

{{-- page level scripts --}}
@section('footer_scripts')

    @parent
    <!-- InputMask -->

    @require_local_js("assets/vendors/jquery.inputmask/min/inputmask/inputmask.min.js")
    @require_local_js("assets/vendors/jquery.inputmask/min/inputmask/inputmask.date.extensions.min.js")

    @require_local_js("assets/vendors/jquery.inputmask/min/inputmask/inputmask.extensions.min.js")
    <!-- date-range-picker -->
    @require_local_js("assets/vendors/moment/js/moment.min.js")
    @require_local_js("assets/vendors/daterangepicker/js/daterangepicker.js")
    <!-- bootstrap time picker -->
    @require_local_js("assets/vendors/bootstrap-maxlength/js/bootstrap-maxlength.js")
    @require_local_js("assets/vendors/moment/js/moment.min.js")
    @require_local_js("assets/vendors/datetimepicker/js/bootstrap-datetimepicker.js")
    @require_local_js("assets/vendors/clockpicker/js/bootstrap-clockpicker.js")

    @require_local_js('assets/vendors/bootstrap-fileinput/js/fileinput.js')
    @require_local_js('assets/vendors/iCheck/js/icheck.js')
    @require_local_js('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js')
    @require_local_js('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js')
    @require_local_js('assets/vendors/select2/js/select2.js')
    @require_local_js('assets/vendors/vertical-timeline/js/modernizr.js')
    @require_local_js('assets/js/custom_js/addnew_user.js')
    
@endsection