<?php

namespace App\Services\Music;


/**
 *
 * @author Marco Bagnaresi <marco.bagnaresi@gmail.com>
 */
interface IPlayerConfiguration {
    const CONTEXT = "player";
    
    const CRYPTOGRAPHY_ALGORITHM_NAME = "SCA";  //simple cryptographic algorithm
    const CRYPTOGRAPHY_ALGORITHM_VERSION = "0"; //version 0 (prototype)
    
    const TIME_ZONE_KEY = "time_zone";  //time zone per il player
    const PLAY_START_TIME_KEY = "play_start_time"; //format is HH:mm:ss
    const PLAY_END_TIME_KEY = "play_end_time"; //format is HH:mm:ss
    const PLAY_END_TIME_DAY_OFFSET_KEY = "play_end_time_day_offset"; //integer offset, 0 or 1
    const CHECK_PLAY_MINUTES_INTERVAL_KEY = "check_play_minutes_interval"; //
    const FILES_UPDATE_TIME_KEY = "files_update_time";
    const LOOP_PLAYLIST_KEY = "loop_playlist";
    const START_FROM_BEGINNING = "start_from_beginning";
    
    const DEFAULT_UNIQUE_LABEL_KEY = "default_unique_label";
    
}