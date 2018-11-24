<?php

/**
 * Language file for group table headings
 *
 */
return array(
    'id' => 'Id',
    'player_id' => 'Player Id',
    'player_name_id' => 'Player Name (Id)',
    'nome_spot' => 'Spot FileName',
    'metadata_status' => 
        array('label' => 'Metadata Status',
              'values' => array('NOT_FETCHED' => 'Not readed',
              'NOT_FOUND' => 'Not found',
              'FOUND' => 'Ok'))
    ,
    'crypted' => array(
        'label'=>'Encryption Status',
        0 => 'Not Encrypted',
        1 => 'Protected'
        ),
    'title' => 'Title',
    'genre' => 'Genre',
    'artist' => 'Artist',
    'album' => 'Album',
    'track' => 'Track',
    'date' => 'Date',
    'duration' => 'Duration',
    'bitrate' => 'Bitrate',
    'created_at' => 'Added on',
    'actions' => 'Actions'
);
