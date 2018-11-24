<?php

use App\Lang\Spots\LForm;
?>
<div class="table-responsive">
    <table class="table table-bordered table-hover">
        <tbody>
            <tr>
                <td class="text-primary">Id</td>
                <td id="track_id">{!! $spot->id !!}</td>
            </tr>      
            <tr>
                <td class="text-primary"><?= LForm::playerNameId() ?></td>
                <td>{!! $spot->getPlayerName() !!} ({!! $spot->player_id !!})</td>
            </tr>

            <tr>
                <td class="text-primary"><?= LForm::nomeSpot() ?></td>
                <td id="track_name">{!! $spot->nome_spot !!}</td>
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
                <td id="track_title">{!! $spot->title !!}</td>
            </tr>

            <tr>
                <td class="text-primary"><?= LForm::artist() ?></td>
                <td id="track_artist">{!! $spot->artist !!}</td>
            </tr>

            <tr>
                <td class="text-primary"><?= LForm::album() ?></td>
                <td id="track_album">{!! $spot->album !!}</td>
            </tr>

            <tr>
                <td class="text-primary"><?= LForm::genre() ?></td>
                <td>{!! $spot->genre !!}</td>
            </tr>

            <tr>
                <td class="text-primary"><?= LForm::track() ?></td>
                <td>{!! $spot->track !!}</td>
            </tr>

            <tr>
                <td class="text-primary"><?= LForm::date() ?></td>
                <td>{!! $spot->date !!}</td>
            </tr>
            @endif
            
            @if($spot->metadata_status == 'NOT_FOUND' || $spot->metadata_status == 'FOUND')
            <tr>
                <td class="text-primary"><?= LForm::duration() ?></td>
                <td id="track_duration">{!! $spot->duration !!}</td>
            </tr>

            <tr>
                <td class="text-primary"><?= LForm::bitrate() ?></td>
                <td>{!! $spot->bitrate !!}</td>
            </tr>
            <tr>
                @if($spot->getUnencryptedFile()->exists())
                <td colspan="2">
                    <audio src='{!! "/".$spot->getUnencryptedFile() !!}' controls />
                </td>
                @else
                <td class="text-primary"><?= LForm::errors() ?></td>
                <td class="text-danger"><b><?= LForm::fileNotFound() ?></b></td>
                @endif
            </tr>
                @if($spot->crypted)
                <tr>
                    <td colspan="2">
                        <button type="button" style="float:right;" class="button button-rounded button-flat-action sink" id="add_spot_button"><?= LForm::addTrack() ?><?= FA::hand_Hand_o_right() ?></button>
                        <script type="text/javascript">
                            $("#add_spot_button").click(function(){
                                addToPlaylist('spot',$("#select_spot").val());
                            });
                        </script>
                    </td>
                </tr>
                @endif
            @endif

        </tbody>
    </table>
                                       
</div>