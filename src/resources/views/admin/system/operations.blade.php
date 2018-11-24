<?php

use App\Lang\System\LMenu;
use App\Lang\System\LPages;
use App\Lang\System\LOperations;

?>
@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
<?= LPages::operations() ?>
@parent
@stop

{{-- Page content --}}
@section('content')
<section class="content-header">
    <h1><?= LPages::operations() ?></h1>
    <ol class="breadcrumb">
        <li>
            <a href="<?= Routes::dashboard() ?>">
                <?= FA::webApplication_Home() ?>
                <?= LMenu::home() ?>
            </a>
        </li>
        <li><?= LMenu::root() ?></li>
        <li>
            <?= LMenu::operations() ?>
        </li>
    </ol>
</section>

<!-- Main content -->
<section class="content paddingleft_right15">
    <div class="row">
        <div class="col-lg-12" align="center">
            <h3><?= LOperations::scan_intro() ?></h3>
            <br />
            <form role="form" class="form-horizontal" enctype="multipart/form-data" method="POST" action='<?= Routes::admin_system_toggleBackgroundScanningAndEncoding_do() ?>'>
                {!! Form::token() !!}
                <?php
                    $scan_button = $background_processing_enabled ? LOperations::disableScan_button() : LOperations::enableScan_button()
                ?>
                <input type="submit" name="<?= $scan_button ?>" value="<?= $scan_button ?>" />
            </form>
            
        </div>
    </div>    <!-- row -->
</section>
@endsection