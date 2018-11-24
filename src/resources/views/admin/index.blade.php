<?php

use App\Lang\LMenu;
use App\Lang\LGeneral;

?>

@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')Dashboard @parent

@stop
    {{-- page level styles --}}
@section('header_styles')
    
    @parent

    @require_local_css('assets/vendors/toastr/css/toastr.css')
    @require_local_css('assets/vendors/QuickNote-jQuery-Plugin/jquery.quicknote.css')
    @require_local_css('assets/css/custom_css/toastr.css')
    @require_local_css('assets/css/custom_css/dashboard.css')
    
@endsection

{{-- Page content --}}
@section('content')
    <section class="content-header">
                <!--section starts-->
                <h1><?= LGeneral::welcome() ?></h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="<?= Routes::dashboard() ?>">
                            <?= FA::webApplication_Home() ?>
                            <?= LMenu::home() ?>
                        </a>
                    </li>

                </ol>
            </section>
            <!--section ends-->
            
            <section class="content">
                <?= LGeneral::instructions() ?>
            </section>
            <!-- /.content -->

@stop
{{-- page level scripts --}}
@section('footer_scripts')
    @parent

    @require_local_js('assets/vendors/toastr/js/toastr.min.js')
    @require_local_js('assets/vendors/QuickNote-jQuery-Plugin/jquery.quicknote.js')
    @require_local_js('assets/js/custom_js/dashboard.js')
@endsection