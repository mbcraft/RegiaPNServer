<?php

use App\Lang\Songs\LForm;
?>
<div class="panel-body">
    <table class="table details-table" id="table">
        <thead>
            <tr class="filters">
                <th><?= LForm::nomeCanzone() ?></th>
                <th class='centered'><?= LForm::metadataStatus_label() ?></th>
                <th class='centered'><?= LForm::crypted_label()?></th>
                @if_column("artist")
                <th class='centered'><?= LForm::artist() ?></th>
                @endif
                <th class='centered'><?= LForm::duration() ?></th>
                @if_column("album_name_id")
                <th class='centered'><?= LForm::albumNameId() ?></th>
                @endif
                @if_column("created_at")
                <th class='centered'><?= LForm::createdAt() ?></th>
                @endif
                <th class='centered'><?= LForm::actions() ?></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tracks as $trk)
            <tr>
                <td class="smaller">{!! $trk->nome_traccia() !!}</td>
                <td class='centered smaller'><?= LForm::metadataStatus_values($trk->metadata_status) ?></td>
                <td class='centered smaller'><?= LForm::crypted_values($trk->crypted) ?></td>
                @if_column("artist")
                <td class='centered smaller'>{!! $trk->artist!=null ? $trk->artist : "-" !!}</td>
                @endif
                <td class='centered smaller'>{!! $trk->duration!=null ? $trk->duration : "-" !!}</td>
                @if_column("album_name_id")
                <td class='centered smaller'>{!! $trk->getAlbumFolderName() !!}</td>
                @endif
                @if_column("created_at")
                <td class='centered smaller'>{!! $trk->created_at->diffForHumans() !!}</td>
                @endif
                @if_column("actions")
                <td class='centered smaller'>  
                    <a href="<?= Routes::{"admin_".$trk->many_entities()."_show"}($trk->id) ?>"><i class="fa fa-fw fa-search text-primary"></i></a>
                </td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
</div>