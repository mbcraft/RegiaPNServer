<?php

use App\Lang\Users\LForm;
use App\Lang\Users\LPages;
use App\Lang\Users\LMenu;
?>

@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    <?= LPages::show() ?>
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')

    @parent

    @require_local_css('assets/css/custom_css/profile.css')
    
@stop


{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1><?= LPages::show() ?></h1>
        <ol class="breadcrumb">
            <li>
                <a href="<?= Routes::dashboard() ?>">
                    <?= FA::webApplication_Home() ?>
                    <?= LMenu::home() ?>
                </a>
            </li>
            <li><?= LMenu::root() ?></li>
            <li>
                <?= LMenu::show() ?>
            </li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content paddingleft_right15">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="text-center mbl">
                                    @if($user->pic)
                                    <div style="background-image:url({!! '/uploads/users/'.Sentinel::getUser()->pic !!});" class="img-circle img-responsive pull-left img-avatar img-avatar-big">
                                    </div>
                                    @else
                                        <img src="{{ asset('assets/images/no_avatar.png') }}" alt="img" class="img-circle img-bor" />
                                    @endif
                                </div>
                            </div>
                            <div style="width:150px;height:150px;"></div>
                            <div align="center">
                                <h2>{!! $user->first_name !!} {!! $user->last_name !!}</h2>
                                <p>{!! $user->email !!}</p>
                            </div>

                        </div>
                        <div class="col-md-8">
                            <table class="table details-table">
                                <tbody>
                                    <tr>
                                        <td class="text-primary"><?= LForm::userName() ?></td>
                                        <td>{!! $user->first_name !!} {!! $user->last_name !!}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary"><?= LForm::email() ?></td>
                                        <td>{!! $user->email !!}</td>
                                    </tr>

                                    <tr>
                                        <td class="text-primary"><?= LForm::roles_label() ?></td>
                                        <td>
                                        @foreach($user->roles()->get() as $role)
                                            <span style="padding:5px; text-decoration: underline;" class="glyphicon glyphicon-star-empty text-info">{!! $role->name !!}</span>
                                        @endforeach
                                        </td>
                                    </tr>

                                    @if($user->gender)
                                        <tr>
                                            <td class="text-primary"><?= LForm::gender_label() ?></td>
                                            <td>{!! LForm::gender_values($user->gender) !!}</td>
                                        </tr>
                                    @endif

                                    @if($user->phone)
                                        <tr>
                                            <td class="text-primary"><?= LForm::phone() ?></td>
                                            <td>{!! $user->phone !!}</td>
                                        </tr>
                                    @endif
                                    @if($user->indirizzo)
                                        <tr>
                                            <td class="text-primary"><?= LForm::address() ?></td>
                                            <td>{!! $user->indirizzo !!} </td>
                                        </tr>
                                    @endif
                                    @if($user->cap)
                                        <tr>
                                            <td class="text-primary"><?= LForm::postal() ?></td>
                                            <td>{!! $user->cap !!} </td>
                                        </tr>
                                    @endif
                                    @if($user->citta)
                                        <tr>
                                            <td class="text-primary"><?= LForm::city() ?></td>
                                            <td>{!! $user->citta !!} </td>
                                        </tr>
                                    @endif
                                    @if($user->provincia)
                                        <tr>
                                            <td class="text-primary"><?= LForm::province() ?></td>
                                            <td>{!! $user->provincia !!} </td>
                                        </tr>
                                    @endif
                                    @if($user->stato)
                                        <tr>
                                            <td class="text-primary"><?= LForm::country() ?></td>
                                            <td>{!! $user->stato !!} </td>
                                        </tr>
                                    @endif

                                    <tr>
                                        <td class="text-primary"><?= LForm::status_label() ?></td>
                                        <td>
                                        @if($user->deleted_at)
                                        <span class="label label-danger"><?= LForm::status_values_deleted() ?></span>
                                        @elseif($activation = Activation::completed($user))
                                        <span class="label label-success"><?= LForm::status_values_activated() ?></span>
                                        @else
                                        <span class="label label-warning"><?= LForm::status_values_pending() ?></span>
                                        @endif
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection