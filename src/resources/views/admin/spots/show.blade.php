<?php

use App\Lang\Spots\LTable;
use App\Lang\Spots\LPages;
use App\Lang\Spots\LForm;
use App\Lang\Spots\LMenu;

?>

@extends('admin/layouts/default')

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
            <a href="<?= Routes::dashboard() ?>">
                <?= FA::webApplication_Home() ?>
                <?= LMenu::home() ?>
            </a>
        </li>
        <li><a href="<?= Routes::admin_spots_index() ?>"><?= LMenu::root() ?></a></li>
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
                    <div class="prf-contacts sttng">
                        <h3 class="text-primary"><?= LTable::show() ?></h3>
                    </div>
                    <div class="col-md-8">
                        <table class="table details-table">
                            <tbody>
                                <tr>
                                    <td class="text-primary">Id</td>
                                    <td>{!! $spot->id !!}</td>
                                </tr>      
                                <tr>
                                    <td class="text-primary"><?= LForm::playerNameId() ?></td>
                                    <td>{!! $spot->getPlayerName() !!} ({!! $spot->player_id !!})</td>
                                </tr>
                                <tr>
                                    <td class="text-primary"><?= LForm::nomeSpot() ?></td>
                                    <td>{!! $spot->nome_spot !!}</td>
                                </tr>
                                <tr>
                                    <td class="text-primary"><?= LForm::metadataStatus_label() ?></td>
                                    <td><?= LForm::metadataStatus_values($spot->metadata_status) ?></td>
                                </tr>
                                <tr>
                                    <td class="text-primary"><?= LForm::crypted_label() ?></td>
                                    <td><?= LForm::crypted_values($spot->crypted) ?></td>
                                </tr>
                                @if($spot->metadata_status == 'FOUND')
                                <tr>
                                    <td class="text-primary"><?= LForm::title() ?></td>
                                    <td>{!! $spot->title !!} </td>
                                </tr>
                                <tr>
                                    <td class="text-primary"><?= LForm::artist() ?></td>
                                    <td>{!! $spot->artist !!} </td>
                                </tr>
                                <tr>
                                    <td class="text-primary"><?= LForm::album() ?></td>
                                    <td>{!! $spot->album !!} </td>
                                </tr>
                                <tr>
                                    <td class="text-primary"><?= LForm::genre() ?></td>
                                    <td>{!! $spot->genre !!} </td>
                                </tr>
                                <tr>
                                    <td class="text-primary"><?= LForm::track() ?></td>
                                    <td>{!! $spot->track !!} </td>
                                </tr>
                                <tr>
                                    <td class="text-primary"><?= LForm::date() ?></td>
                                    <td>{!! $spot->date !!} </td>
                                </tr>
                                <tr>
                                    <td class="text-primary"><?= LForm::duration() ?></td>
                                    <td>{!! $spot->duration !!} </td>
                                </tr>
                                <tr>
                                    <td class="text-primary"><?= LForm::bitrate() ?></td>
                                    <td>{!! $spot->bitrate !!} </td>
                                </tr>
                                @endif
                                <tr>
                                @if($spot->getUnencryptedFile()->exists())
                                    <td class="text-primary"><?= LForm::listen() ?></td>
                                    <td>
                                        <audio src='{!! "/".$spot->getUnencryptedFile() !!}' controls />
                                    </td>
                                @else
                                    <td class="text-primary"><?= LForm::errors() ?></td>
                                    <td class="text-danger"><b><?= LForm::fileNotFound() ?></b></td>
                                @endif
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