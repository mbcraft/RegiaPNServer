<?php

use App\Lang\Songs\LMenu;
use App\Lang\Songs\LTable;
use App\Lang\Songs\LForm;
use App\Lang\Songs\LPages;

?>

@extends('admin/layouts/default')

@include("widgets/datatables/setup")

{{-- Page title --}}
@section('title')
Song List
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
            <a href="<?= Routes::admin_songs_index() ?>"><?= LMenu::list_() ?></a>
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
                        <?= FA::webApplication_Music() ?>
                        <?= LTable::list_() ?>
                    </h3>
                </div>
                @include("admin.songs._song_list",["songs" => $songs])
            </div>
        </div>
    </div>    <!-- row-->
</section>
@stop