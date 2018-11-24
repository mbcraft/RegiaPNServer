<?php

use App\Lang\Players\LPages;
use App\Lang\Players\LMenu;
use App\Lang\Players\LMessage;
use App\Lang\Players\LTable;

?>

@extends('admin/layouts/default')

@include("widgets/datatables/setup")

{{-- Page title --}}
@section('title')
<?= LPages::updatePackageGenerationResult() ?>
@parent
@stop

{{-- Page content --}}
@section('content')
<section class="content-header">
    <h1><?= LPages::updatePackageGenerationResult() ?></h1>
    <ol class="breadcrumb">
        <li>
            <a href="<?= Routes::dashboard() ?>">
                <?= FA::webApplication_Home() ?>
                <?= LMenu::home() ?>
            </a>
        </li>
        <li><?= LMenu::root() ?></li>
        <li>
            <a href="<?= Routes::admin_players_index() ?>"><?= LMenu::list_() ?></a>
        </li>
        <li>
            <?= LPages::updatePackageGenerationResult() ?>
        </li>
    </ol>
</section>

<!-- Main content -->
<section class="content paddingleft_right15">
    <div class="row">
        <div class="col-lg-12">
            <h2><?= LMessage::updatePackageGeneration_success() ?></h2>
            <br />
            <br />
            <br />
            <?= LTable::downloadLocation() ?> : <br /><br />
            <?= $absolute_download_link ?>
            <br />
            <br />
            <br />
            <?= LTable::downloadLink() ?> : <a href="<?=$absolute_download_link ?>"><?= LTable::clickToDownload() ?></a>
        </div>
    </div>    <!-- row-->
</section>
@stop