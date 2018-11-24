<?php

use App\Lang\Spots\LMenu;
use App\Lang\Spots\LPages;
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
        <li><?= LMenu::root() ?></li>
        <li>
            <a href="<?= Routes::admin_spots_index() ?>"><?= LMenu::list_() ?></a>
        </li>
    </ol>
</section>

<!-- Main content -->
<section class="content paddingleft_right15">
    <div class="row">
        <div class="col-lg-12">
            @include("admin.spots._spot_list",["spots" => $spots])
        </div>
    </div>    <!-- row-->
</section>
@endsection