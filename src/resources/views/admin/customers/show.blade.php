<?php
use App\Lang\Customers\LForm;
use App\Lang\Customers\LMenu;
use App\Lang\Customers\LPages;
use App\Lang\Customers\LTable;
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

@require_local_css('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css')

@endsection


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
        <li><a href="<?= Routes::admin_customers_index() ?>"><?= LMenu::root() ?></a></li>
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
                    <div class="col-md-12">
                        <div class="prf-contacts sttng">
                            <h3 class="text-primary"><?= LTable::show() ?></h3>
                        </div>
                        <table class="table details-table">
                            <tbody>
                                <tr>
                                    <td class="text-primary"><?= LForm::owner() ?></td>
                                    <td>{!! $users->keyBy("id")[$customer->owner_id]->first_name !!} {!! $users->keyBy("id")[$customer->owner_id]->last_name !!}</td>
                                </tr>

                                <tr>
                                    <td class="text-primary"><?= LForm::manager() ?></td>
                                    <td>{!! $users->keyBy("id")[$customer->manager_id]->first_name !!} {!! $users->keyBy("id")[$customer->manager_id]->last_name !!}</td>
                                </tr>
                                
                                <tr>
                                    <td class="text-primary"><?= LForm::companyInformations() ?></td>
                                    <td>{!! $customer->nome !!} {!! $customer->cognome !!}</td>
                                </tr>
                                
                                <tr>
                                    <td class="text-primary"><?= LForm::uniqueLabel() ?></td>
                                    <td>{!! $customer->unique_label !!}</td>
                                </tr>
                                
                                <tr>
                                    <td class="text-primary"><?= LForm::securityToken() ?></td>
                                    <td>{!! $customer->security_token !!}</td>
                                </tr>

                                <tr>
                                    <td class="text-primary"><?= LForm::companyName() ?></td>
                                    <td>{!! $customer->ragione_sociale !!}</td>
                                </tr>
                                
                                <tr>
                                    <td class="text-primary"><?= LForm::vat() ?></td>
                                    <td>{!! $customer->p_iva !!}</td>
                                </tr>
                                
                                <tr>
                                    <td class="text-primary"><?= LForm::fiscalCode() ?></td>
                                    <td>{!! $customer->codice_fiscale !!}</td>
                                </tr>

                                <tr>
                                    <td class="text-primary"><?= LForm::email() ?></td>
                                    <td>{!! $customer->email !!}</td>
                                </tr>

                                <tr>
                                    <td class="text-primary"><?= LForm::phone() ?></td>
                                    <td>{!! $customer->telefono !!}</td>
                                </tr>
                                
                                <tr>
                                    <td class="text-primary"><?= LForm::webSite() ?></td>
                                    <td>{!! $customer->sito_web !!}</td>
                                </tr>

                                <tr>
                                    <td class="text-primary"><?= LForm::location() ?></td>
                                    <td>{!! $customer->indirizzo !!} <br />
                                        {!! $customer->cap !!} - {!! $customer->citta !!} ({!! $customer->provincia !!})<br />
                                        {!! $customer->stato !!}
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td class="text-primary"><?= LForm::note() ?></td>
                                    <td>{!! $customer->note !!}</td>
                                </tr>

                                <tr>
                                    <td class="text-primary"><?= LForm::active_label() ?></td>
                                    <td>
                                        @if($customer->deleted_at)
                                        <span class="label label-danger"><?= LForm::active_values_0() ?></span>
                                        @else
                                        <span class="label label-success"><?= LForm::active_values_1() ?></span>
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
@stop

{{-- page level scripts --}}
@section('footer_scripts')

    @parent
    
    @require_local_js('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js')

@stop