<?php

use App\Lang\Albums\LMenu;
use App\Lang\Albums\LTable;
use App\Lang\Albums\LPages;

?>
@extends('admin/layouts/default')

@include('widgets/datatables/setup')

{{-- Page title --}}
@section('title')
    <?= LPages::show() ?>
    @parent
@stop

{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1><?= LPages::show() ?></h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('dashboard') }}">
                    <?= FA::webApplication_Home() ?>
                    <?= LMenu::home() ?>
                </a>
            </li>
            <li><a href="<?= Routes::admin_albums_index() ?>"><?= LMenu::root() ?></a></li>
            <li>
                <?= LMenu::show() ?>
            </li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content paddingleft_right15">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary ">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <?= FA::webApplication_Music() ?>
                            <?= isset($album) ? LTable::listForAlbum()." : ".$album->getShortDescription() : LTable::list_() ?>
                        </h3>
                    </div>
                    @include("admin.songs._song_list",["many_entities_route" => "songs","songs" => $album->songs()->get(),"hide_columns" => ["artist","album_name_id","created_at"]])
                </div>
            </div>
        </div>
    </section>
@endsection