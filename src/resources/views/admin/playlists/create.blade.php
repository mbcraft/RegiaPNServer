<?php

use App\Lang\Playlists\LPages;
use App\Lang\Playlists\LMenu;
use App\Lang\Playlists\LForm;
use App\Lang\Playlists\LTable;
use App\Models\Playlist;
use App\Models\Player;

?>

@extends('admin/layouts/default')

@section("header_styles")
@parent

@require_local_css("/assets/vendors/Buttons/css/buttons.css")

@endsection

{{-- Page title --}}
@section('title')
<?= LPages::create() ?>
@parent
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
        <li><a href="<?= Routes::admin_playlists_index() ?>"><?= LMenu::root() ?></a></li>
        <li>
            <?= LMenu::create() ?>
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
                        <form role="form" id="tryitForm" class="form-horizontal" enctype="multipart/form-data" method="POST" action="<?= Routes::admin_playlists_create_do() ?>">
                            @include("admin/playlists/_form",['playlist' => Playlist::newEmpty($player_id)])
                            <div align="center">
                                @include("form/parts/create_buttons")
                            </div>
                        </form>
                    </div>
                    <!--main content end--> </div>
            </div>
        </div>
    </div>
    <!--row end-->
</section>
@endsection