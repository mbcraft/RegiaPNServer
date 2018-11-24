<?php
use App\Lang\Albums\LForm;
use App\Lang\Albums\LMenu;
use App\Lang\Albums\LPages;


?>
@extends('admin/layouts/default')

@include('widgets/datatables/setup')

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
            <li><a href="<?= Routes::admin_albums_index() ?>"><?= LMenu::root() ?></a></li>
            <li>
                <?= LMenu::list_() ?>
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
                        <?= LPages::list_() ?>
                    </h3>
                </div>
                <div class="panel-body">
                    <table class="table" id="table">
                        <thead>
                        <tr class="filters">
                            <th><?= LForm::nomeAlbum() ?></th>
                            <th><?= LForm::songCount() ?></th>
                            <th><?= LForm::totalLength() ?></th>
                            <th><?= LForm::createdAt() ?></th>
                            <th><?= LForm::actions() ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($albums as $album)
                            <tr>
                                <td>{!! $album->nome_album !!}</td>
                                <td>{!! $album->songs()->count() !!}</td>
                                <td>{!! $album->getTotalDuration() !!}</td>
                                <td>{!! $album->created_at !!}</td>
                                <td>
                                    @include("form/parts/show_action",["lform" => LForm::class])
                                    @ican('delete',$album)
                                        @include('form/parts/confirm_delete_action',["lform" => LForm::class])
                                    @endcan
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>    <!-- row-->
    </section>
@stop