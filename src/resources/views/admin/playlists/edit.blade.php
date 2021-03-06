<?php

use App\Lang\Playlists\LMenu;
use App\Lang\Playlists\LForm;
use App\Lang\Playlists\LPages;
use App\Lang\Playlists\LTable;
?>

@extends('admin/layouts/default')

@include("widgets/tooltips/setup")

{{-- Page title --}}
@section('title')
<?= LPages::edit() ?>
@parent
@stop


{{-- Page content --}}
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1><?= LPages::edit() ?></h1>
    <ol class="breadcrumb">
        <li>
            <a href="<?= Routes::home() ?>">
                <?= FA::webApplication_Home() ?>
                <?= LMenu::home() ?>
            </a>
        </li>
        <li><?= LMenu::root() ?></li>
        <li>
            <a href="<?= Routes::admin_playlists_edit() ?>"><?= LPages::edit() ?></a>
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
                        <?= LTable::edit() ?>
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
                        <form role="form" id="tryitForm" class="form-horizontal" enctype="multipart/form-data" method="POST" action='<?= Routes::admin_playlists_edit_do() ?>'>               
                            @include("admin/playlists/_form",['playlist' => $playlist])
                            @ican('manage',$playlist)
                                @include("form/parts/edit_buttons")
                            @endcan
                        </form>
                    </div>
                    <!--main content end-->
                </div>
            </div>
        </div>
    </div>
    <!--row end-->
</section>
@endsection