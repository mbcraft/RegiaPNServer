<?php
use App\Lang\Customers\LPages;
use App\Lang\Customers\LMenu;
use App\Lang\Customers\LTable;
use App\Models\Cliente;

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
            <li><a href="<?= Routes::admin_customers_index() ?>"><?= LMenu::root() ?></a></li>
            <li>
                <a href="<?= Routes::admin_customers_create() ?>"><?= LMenu::create() ?></a>
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
                            <?= LTable::create() ?>
                        </h3>
                    </div>
                    <div class="panel-body">
                        <!--main content-->
                        <div class="position-center">
                            @include("form/parts/errors",["errors" => $errors])
                            <form role="form" id="tryitForm" class="form-horizontal" action="" enctype="multipart/form-data" method="POST">
                                @include("admin/customers/_form",["customer" => (new Cliente())->withDefaultCountry(),"create" => true])
                                
                                @include("form/parts/create_buttons")
                            </form>
                        </div>
                        <!--main content end--> </div>
                </div>
            </div>
        </div>
        <!--row end-->
    </section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')

    @parent

    @require_local_js('assets/vendors/iCheck/js/icheck.js')
    @require_local_js('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js')
    @require_local_js('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js')
    @require_local_js('assets/vendors/select2/js/select2.js')
    @require_local_js('assets/vendors/vertical-timeline/js/modernizr.js')
    @require_local_js('assets/js/custom_js/addnew_user.js')
@stop