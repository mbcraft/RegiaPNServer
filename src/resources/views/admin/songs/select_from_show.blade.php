<?php

use App\Lang\Songs\LForm;
?>
<div class="table-responsive">
    <table class="table table-bordered table-hover">
        <tbody>
            <tr>
                <td class="text-primary">Id</td>
                <td id="track_id">{!! $song->id !!}</td>
            </tr> 
            <tr>
                <td class="text-primary"><?= LForm::albumNameId() ?></td>
                <td>{!! $song->getAlbumFolderName() !!} ({!! $song->album_id !!})</td>
            </tr>

            <tr>
                <td class="text-primary"><?= LForm::nomeCanzone() ?></td>
                <td id="track_name">{!! $song->nome_canzone !!}</td>
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
                <td id="track_title">{!! $song->title !!}</td>
            </tr>

            <tr>
                <td class="text-primary"><?= LForm::artist() ?></td>
                <td id="track_artist">{!! $song->artist !!}</td>
            </tr>

            <tr>
                <td class="text-primary"><?= LForm::album() ?></td>
                <td id="track_album">{!! $song->album !!}</td>
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
                <td id="track_duration">{!! $song->duration !!}</td>
            </tr>

            <tr>
                <td class="text-primary"><?= LForm::bitrate() ?></td>
                <td>{!! $song->bitrate !!}</td>
            </tr>
            <tr>
                @if($song->getUnencryptedFile()->exists())
                <td colspan="2" align='center'>
                    <audio src='{!! "/".$song->getUnencryptedFile() !!}' controls />
                </td>
                @else
                <td class="text-primary"><?= LForm::errors() ?></td>
                <td class="text-danger"><b><?= LForm::fileNotFound() ?></b></td>
                @endif
            </tr>
            @if($song->crypted)
            <tr>
                <td colspan="2">
                    <button type="button" style="float:right;" class="button button-rounded button-flat-action sink" id="add_song_button"><?= LForm::addTrack() ?><?= FA::hand_Hand_o_right() ?></button>
                    <script type="text/javascript">
                        $("#add_song_button").click(function() {
                            addToPlaylist('song', $("#select_song").val());
                        });
                    </script>
                </td>
            </tr>
            @endif
            @endif
        </tbody>
    </table>
</div>