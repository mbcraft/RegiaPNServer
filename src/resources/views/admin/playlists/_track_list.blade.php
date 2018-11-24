<?php
use App\Lang\Playlists\LForm;
use App\Lang\Playlists\LTable;
?>
<div class="panel panel-primary ">
    <div class="panel-heading">
        <h3 class="panel-title">
            <?= FA::webApplication_Music() ?>
            <?= LTable::show() ?>
        </h3>
    </div>
    <div class="panel-body">
        <table class="table" id="table">
            <thead>
                <tr class="filters">
                    <th><?= LForm::order() ?></th>
                    <th><?= LForm::trackType() ?></th>
                    <th><?= LForm::trackName() ?></th>
                    <th><?= LForm::album() ?></th>
                    <th><?= LForm::artist() ?></th>
                    <th><?= LForm::duration() ?></th>
                    <th><?= LForm::actions() ?></th>
                </tr>
            </thead>
            <tbody>
                @index("ix")
                @foreach ($tracks as $trk)
                <tr class="<?= $trk::one_entity()=="spot" ? "text-primary" : "" ?>">
                    <td>{!! ++$ix !!}</td>
                    <td>{!! $trk->tipo_traccia() !!}</td>
                    <td>{!! $trk->nome_traccia() !!}</td>
                    <td>{!! $trk->album!=null ? $trk->album : "-" !!}</td>
                    <td>{!! $trk->artist!=null ? $trk->artist : "-" !!}</td>
                    <td>{!! $trk->duration !!}</td>
                    <td><a href="<?= Routes::{"admin_".$trk->many_entities()."_show"}($trk->id) ?>"><i class="fa fa-fw fa-search text-primary"></i></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>