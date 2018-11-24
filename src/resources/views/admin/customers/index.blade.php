<?php

use App\Lang\Customers\LForm;
use App\Lang\Customers\LMenu;
use App\Lang\Customers\LPages;
use App\Lang\Customers\LTable;
use App\Lang\Customers\LModal;
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
            <a href="<?= Routes::admin_customers_index() ?>"><?= LMenu::list_() ?></a>
        </li>
    </ol>

</section>

<!-- Main content -->
<section class="content paddingleft_right15">
    <div class="row">
        <div class="col-lg-12">
            <div class="btn-group" role="group" aria-label="...">

                <?= Mbcraft\Utils\HtmlHelper::trashedButtons(Routes::admin_customers_index(), "App\Models\Cliente", LModal::entityMany()) ?>

            </div>
            <br />&nbsp;
            <div class="panel panel-primary ">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <?= FA::webApplication_Users() ?>
                        <?= LTable::list_() ?>
                    </h3>
                </div>
                @if_has_elements($customers)
                <div class="panel-body">
                    <table class="table" id="table">
                        <thead>
                            <tr class="filters">
                                <th><?= LForm::firstName() ?></th>
                                <th><?= LForm::lastName() ?></th>
                                <th><?= LForm::companyName() ?></th>
                                <th><?= LForm::playerCount() ?></th>
                                <th><?= LForm::createdAt() ?></th>
                                <th><?= LForm::actions() ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customers as $customer)
                                @ican('manage',$customer)
                                    <tr>
                                        <td>{!! $customer->nome !!}</td>
                                        <td>{!! $customer->cognome !!}</td>
                                        <td>{!! $customer->ragione_sociale !!}</td>
                                        <td>{!! count($customer->players()) !!}</td>
                                        <td>{!! $customer->created_at->diffForHumans() !!}</td>
                                        <td>
                                            <?php
                                            if (!$customer->trashed()) {
                                                ?>
                                                @include('form/parts/edit_action',["lform" => LForm::class])
                                                @include('form/parts/confirm_delete_action',["lform" => LForm::class])
                                                @include('form/parts/show_action',["lform" => LForm::class])
                                                <a href="<?= Routes::{"admin_" . $many_entities . "_players"}($$one_entity->id) ?>"><?= FA::videoPlayer_Play_circle_o("fa-fw text-info", LForm::playersTooltip()) ?></a>
                                                @ican('createCustomerPlayers',$customer)
                                                    <form name="form_create_player" style="display:inline-block;" action="<?= Routes::{"admin_players_create"}() ?>" method="GET">
                                                        <input type="hidden" name="cliente_id" value="<?= $$one_entity->id ?>" />
                                                        <button title="<?= LForm::createPlayerTooltip() ?>" type="button" class="action_button" onclick="this.form.submit();"><?= FA::videoPlayer_Arrows_alt("fa-fw text-info") ?></button>
                                                    </form>
                                                @endcan
                                                <?php
                                            } else {
                                                ?>
                                                @include("form/parts/index_deleted_row_actions",["lform" => LForm::class])
                                                <?php
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                @endcan
                            @endforeach

                        </tbody>
                    </table>
                </div>
                @else
                <div class="panel-body">
                    <?= LTable::noEntities() ?>
                </div>
                @endif
            </div>
        </div>
    </div>    <!-- row-->
</section>
@stop
