<?php

use App\Lang\Users\LMenu;
use App\Lang\Users\LForm;
use App\Lang\Users\LPages;

$lform = 'App\Lang\Users\LForm';
$lpagination = 'App\Lang\LPagination';

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
            <li><?= LMenu::root() ?></li>
            <li>
                <a href="<?= Routes::admin_users_index() ?>"><?= LMenu::list_() ?></a>
            </li>
        </ol>
        
    </section>

    <!-- Main content -->
    <section class="content paddingleft_right15">
        <div class="row">
            <div class="col-lg-12">
                @include("form/parts/index_buttons",["lpagination" => $lpagination,"plural_entity_name" => "utenti"])
                <br />&nbsp;
                <div class="panel panel-primary ">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <?= FA::webApplication_Users() ?>
                        <?= LPages::list_() ?>
                    </h3>
                </div>
                <div class="panel-body">
                    <table class="table" id="table">
                        <thead>
                        <tr class="filters">
                            <th><?= LForm::firstName() ?></th>
                            <th><?= LForm::lastName() ?></th>
                            <th><?= LForm::email() ?></th>
                            <th><?= LForm::status_label() ?></th>
                            <th><?= LForm::createdAt() ?></th>
                            <th><?= LForm::actions() ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{!! $user->first_name !!}</td>
                                <td>{!! $user->last_name !!}</td>
                                <td>{!! $user->email !!}</td>
                                <td>
                                    @if($activation = Activation::completed($user))
                                        <?= LForm::status_values_activated() ?>
                                    @else
                                        <?= LForm::status_values_pending() ?>
                                    @endif
                                </td>
                                <td>{!! $user->created_at->diffForHumans() !!}</td>

                                <td>
                                    @if(!$user->trashed())
                                        @ican('editUser',$user)
                                            @include('form/parts/edit_action',["lform" => LForm::class])
                                        @endcan
                                        @ican('deleteOrRestoreUser',$user)
                                            @include('form/parts/confirm_delete_action',["lform" => LForm::class])
                                        @endcan
                                        @ican('showUser',$user)
                                            @include('form/parts/show_action',["lform" => LForm::class])
                                        @endcan
                                    @else
                                        @ican('deleteOrRestoreUser',$user)
                                            @include('form/parts/restore_action',["lform" => LForm::class])
                                        @endcan
                                    @endif
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
@endsection