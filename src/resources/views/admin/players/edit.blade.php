<?php

use App\Lang\Players\LPages;
use App\Lang\Players\LMenu;
use App\Lang\Players\LTable;

?>

@extends('admin/layouts/default')

@include("widgets/form_elements/setup")

{{-- Page title --}}
@section('title')
<?= LPages::edit() ?>
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

@endsection


{{-- Page content --}}
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1><?= LPages::edit() ?></h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}">
                <?= FA::webApplication_Home() ?>
                <?= LMenu::home() ?>
            </a>
        </li>
        <li><?= LMenu::root() ?></li>
        <li>
            <a href="{{ route('admin.players.edit') }}"><?= LMenu::edit() ?></a>
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
                            <?= LTable::edit() ?>
                        </h3>
                    </div>
                    <div class="panel-body">
                        <!--main content-->
                        <div class="position-center">
                            @include("form/parts/errors",["errors" => $errors])
                            <form role="form" class="form-horizontal" action="<?= Routes::admin_players_edit_do() ?>" enctype="multipart/form-data" method="POST">
                                <input type="hidden" name="id" value="{!! $player->id !!}" />
                                <input type="hidden" name="cliente_id" value="{!! $player->cliente_id !!}" />                                
                                @include("admin/players/_form",["player" => $player,"create" => false])
                                @ican('manage',$player)
                                    @include("form/parts/edit_buttons",['lform' => LForm::class])
                                @endcan
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
@require_local_js('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js')
@require_local_js('assets/vendors/select2/js/select2.js')
@require_local_js('assets/vendors/vertical-timeline/js/modernizr.js')

@endsection