<?php
use App\Lang\Playlists\LForm;

$player = $playlist->player()->firstOrFail();
?>
{!! Form::token() !!}
<input type='hidden' name='id' value='{!! $playlist->id !!}' />
<div class="cd-block">
    @begin_widget("tabs/navs")
        @widget("tabs/nav",["name" => "Dati generali"])
        @widget("tabs/nav",["name" => "Tracce playlist"])
    @end_widget
    @begin_widget("tabs/tabs")
    @begin_widget("tabs/tab")
    <div class="cd-content">
        <div class="form-group">
            <label class="col-lg-2 control-label" for="customer_label_id"><?= LForm::customerLabelId() ?></label>
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon">
                        <?= FA::webApplication_User() ?>
                    </span>
                    <input type="text" name="customer_label_id" id="customer_label_id" readonly="readonly" disabled="disabled" class="form-control" value="{!! $player->cliente()->firstOrFail()->unique_label !!} ({!! $player->cliente_id !!})" />
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-2 control-label" for="player_id"><?= LForm::playerLabelId() ?></label>
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon">
                        <?= FA::videoPlayer_Play_circle() ?>
                    </span>
                    <input type="hidden" placeholder="player_id" name="player_id" id="player_id" readonly="readonly" class="form-control" value="{!! $playlist->player_id !!}" />
                    <input type="text" name="player_label_id" id="player_label_id" readonly="readonly" disabled="disabled" class="form-control" value="{!! $player->unique_label !!} ({!! $playlist->player_id !!})" />
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-2 control-label" for="titolo"><?= LForm::title() ?></label>
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon">
                        <?= FA::webApplication_I_cursor() ?>
                    </span>
                    <input type="text" placeholder="<?= LForm::title_placeholder() ?>" name="titolo" id="titolo" class="form-control" value="{!! Input::old('titolo',$playlist->titolo) !!}" required="" />
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-2 control-label" for="stato_label"><?= LForm::status_label() ?></label>
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon">
                        <?= FA::webApplication_Bar_chart() ?>
                    </span>
                    @if(Input::old('stato',$playlist->stato)=='ACTIVE')
                    <input type="hidden" name="stato" id="stato" value="ACTIVE" required="" />
                    <input type="text" name="stato_label" id="stato_label" class="form-control" readonly="readonly" value="{!! LForm::status_values_ACTIVE() !!}" required="" />
                    <span class="input-group-addon">
                        
                        @widget("tooltips/right_box",['icon' => FA::webApplication_Question_circle(),'title' => App\Lang\Playlists\LForm::activeNoStateEditingExplanation_title(),'body' => App\Lang\Playlists\LForm::activeNoStateEditingExplanation_body()])
                    </span>
                    @else
                    <?= Form::select('stato', LForm::status_values() ,Input::old('stato',$playlist->stato),array('class' => 'form-control select2', 'id' => 'field_stato')) ?>
                    @endif
                </div>
            </div>
        </div>
        <div class="cd-block">
            <div class="cd-content">
                <div class="form-group">
                    <label class="col-lg-2 control-label" for="note"><?= LForm::note() ?></label>
                    <div class="col-lg-6">
                        <div class="input-group">
                    <span class="input-group-addon">
                        <?= FA::webApplication_Sticky_note_o("fa-fw text-primary") ?>
                    </span>
                            <textarea id="note" name="note" class="form-control" rows="4" placeholder="<?= LForm::note_placeholder() ?>">{!! Input::old('note',$playlist->note) !!}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @end_widget
    @begin_widget("tabs/tab")
    <div class="cd-content">
        <!-- Icone utilizzate, definite qui per usare l'helper -->
        <script type="text/javascript">
            player_id = {!! $player->id !!};
            move_up_icon = "<?= FA::webApplication_Level_up(); ?>";
            move_down_icon = "<?= FA::webApplication_Level_down(); ?>";
            remove_icon = "<?= FA::webApplication_Close(); ?>";
            no_playlist_elements_html = "<div align='center'><?= LForm::noPlaylistElements(); ?></div>";
            before_playlist_tracks_html = '<div id="track_list" class="table-responsive">\
                                <input type="hidden" id="playlist_element_count" name="playlist_element_count" value="0" />\
                                <table class="table table-bordered table-hover">\
                                    <thead>\
                                        <tr>\
                                            <th><?= LForm::order() ?></th>\
                                            <th><?= LForm::trackName() ?></th>\
                                            <th><?= LForm::duration() ?></th>\
                                            <th><?= LForm::actions() ?></th>\
                                        </tr>\
                                    </thead>\
                                    <tbody id="playlist_tracks">';
            after_playlist_tracks_html = '</tbody>\
                                </table>\
                            </div>\
                            <div align="center">\
                                <span><?= LForm::totalDuration() ?></span>\
                                <span id="total_playlist_duration"></span>\
                            </div>';
        </script>
        <!-- Codice javascript per la gestione delle playlist -->
        <script type="text/javascript" src="/assets/js/playlist.js"></script>
        <!--  -->
        <div class="form-group">
            <table>
                <thead>
                    <tr>
                        <th><?= LForm::tracks() ?></th>
                        <th><?= LForm::playlist() ?></th>
                    </tr>
                </thead>
                <tbody>
                <td class="col-lg-4" style="vertical-align: bottom;">
                    <div style="padding:5px;">
                        <div id="primary_selector">
                        </div>
                    </div>
                    <div style="padding:5px;">
                        <div id="secondary_selector">
                        </div>
                    </div>
                    <div style="padding:5px;">
                        <div id="track_details">
                        </div>
                    </div>
                </td>
                <td class="col-lg-6">
                    <div id="playlist_output">
                    </div>
                </td>
                </tbody>
            </table>
            @section("footer_scripts")
            @parent
            <script type="text/javascript">
                //primary selector
                $("#primary_selector").load('/admin/albums?select=true');
            </script>
            <script type='text/javascript'>
                @foreach($playlist->orderedElements() as $element)
                    addToPlaylistRaw({!! $element->id !!},'{!! $element::one_entity() !!}','{{ $element->nome_traccia() }}','{{ $element->title }}','{!! $element->album !!}','{!! $element->duration !!}');
                @endforeach
                    flushPlaylistChanges();
            </script>
            @endsection
        </div>
    </div>
    @end_widget
</div>