<?php

use App\Lang\Songs\LMenu;
use App\Lang\Songs\LForm;
use App\Lang\Songs\LTable;
use App\Lang\Songs\LPages;
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
        <li><a href="<?= Routes::admin_songs_index() ?>"><?= LMenu::root() ?></a></li>
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
                                    <td>{!! $song->id !!}</td>
                                </tr> 
                                <tr>
                                    <td class="text-primary"><?= LForm::albumNameId() ?></td>
                                    <td>{!! $song->getAlbumFolderName() !!} ({!! $song->album_id !!})</td>
                                </tr>
                                <tr>
                                    <td class="text-primary"><?= LForm::nomeCanzone() ?></td>
                                    <td>{!! $song->nome_canzone !!}</td>
                                </tr>
                                <tr>
                                    <td class="text-primary"><?= LForm::metadataStatus_label() ?></td>
                                    <td><?= LForm::metadataStatus_values($song->metadata_status) ?></td>
                                </tr>
                                <tr>
                                    <td class="text-primary"><?= LForm::crypted_label() ?></td>
                                    <td><?= LForm::crypted_values($song->crypted) ?></td>
                                </tr>
                                @if($song->metadata_status == 'FOUND')
                                <tr>
                                    <td class="text-primary"><?= LForm::title() ?></td>
                                    <td>{!! $song->title !!}</td>
                                </tr>
                                <tr>
                                    <td class="text-primary"><?= LForm::artist() ?></td>
                                    <td>{!! $song->artist !!}</td>
                                </tr>
                                <tr>
                                    <td class="text-primary"><?= LForm::album() ?></td>
                                    <td>{!! $song->album !!}</td>
                                </tr>
                                <tr>
                                    <td class="text-primary"><?= LForm::genre() ?></td>
                                    <td>{!! $song->genre !!}</td>
                                </tr>
                                <tr>
                                    <td class="text-primary"><?= LForm::track() ?></td>
                                    <td>{!! $song->track !!}</td>
                                </tr>
                                <tr>
                                    <td class="text-primary"><?= LForm::date() ?></td>
                                    <td>{!! $song->date !!}</td>
                                </tr>
                                @endif
                                @if($song->metadata_status == 'NOT_FOUND' || $song->metadata_status == 'FOUND')
                                <tr>
                                    <td class="text-primary"><?= LForm::duration() ?></td>
                                    <td>{!! $song->duration !!}</td>
                                </tr>
                                <tr>
                                    <td class="text-primary"><?= LForm::bitrate() ?></td>
                                    <td>{!! $song->bitrate !!}</td>
                                </tr>
                                @endif
                                <tr>
                                    @if($song->getUnencryptedFile()->exists())
                                    <td class="text-primary"><?= LForm::listen() ?></td>
                                    <td>
                                        <audio src='{!! "/".$song->getUnencryptedFile() !!}' controls />
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
@stop
