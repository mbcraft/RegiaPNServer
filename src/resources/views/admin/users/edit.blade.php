<?php
use App\Lang\Users\LMenu;
use App\Lang\Users\LTable;
use App\Lang\Users\LPages;

?>

@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
<?= LPages::edit() ?>
@parent
@stop

{{-- page level styles --}}
@section('header_styles')

@parent

@require_local_css('assets/vendors/bootstrap-fileinput/css/fileinput.css')
@require_local_css('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css')
@require_local_css('assets/vendors/bootstrapvalidator/css/bootstrapValidator.min.css')
@require_local_css('assets/vendors/iCheck/css/minimal/blue.css')
@require_local_css('assets/vendors/select2/css/select2.min.css')
@require_local_css('assets/vendors/select2/css/select2-bootstrap.css')
@require_local_css('assets/css/custom_css/addnew_user.css')

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
        <li><?= LMenu::root() ?></li>
        <li>
            <?= LMenu::edit() ?>
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
                        <?= LPages::edit() ?>
                    </h3>
                </div>
                <div class="panel-body">
                    <!--main content-->
                    <div class="position-center">
                        @include("form/parts/errors")
                        <div>
                            <h3 class="text-primary"><?= LTable::edit() ?></h3>
                        </div>
                        <form role="form" class="form-horizontal" enctype="multipart/form-data" action="<?= Routes::admin_users_edit_do() ?>" method="POST">
                            <input type="hidden" name="id" value="<?=$user->id ?>" />
                            
                            @include("admin/users/_form",["required_passwords" => false])
                            
                            @include("form/parts/edit_buttons")
                        </form>
                    </div>
                    <!--main content end-->
                </div>
            </div>
        </div>
    </div>
    <!--row end-->
</section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')

    @parent
    @require_local_js("assets/vendors/moment/js/moment.min.js")
    <!-- InputMask -->

    @require_local_js("assets/vendors/jquery.inputmask/jquery.inputmask.bundle.js")
    <!-- date-range-picker -->
    @require_local_js("assets/vendors/daterangepicker/js/daterangepicker.js")
    <!-- bootstrap time picker -->
    @require_local_js("assets/vendors/bootstrap-maxlength/js/bootstrap-maxlength.js")
    
    @require_local_js("assets/vendors/datetimepicker/js/bootstrap-datetimepicker.min.js")
    @require_local_js("assets/vendors/clockpicker/js/bootstrap-clockpicker.js")

    @require_local_js('assets/vendors/bootstrap-fileinput/js/fileinput.js')
    @require_local_js('assets/vendors/iCheck/js/icheck.js')
    @require_local_js('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js')
    @require_local_js('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js')
    @require_local_js('assets/vendors/select2/js/select2.js')
    @require_local_js('assets/vendors/vertical-timeline/js/modernizr.js')
    @require_local_js('assets/js/custom_js/edit_user.js')
    
@endsection