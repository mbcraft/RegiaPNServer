<?php

/**
 * Language file for player table headings
 *
 */
return array(
    'id' => 'Id',
    'customer_unique_label' => "Etichetta Cartella Cliente",
    'unique_label' => 'Etichetta Cartella Player',
    'unique_label.placeholder' => 'Es: player_negozio_xyz',
    'registration_code' => 'Codice di Registrazione',
    'registration_code.placeholder' => 'Codice inserito in fase di installazione, es: 1234',
    'status' => array(
        'label' => 'Stato del Player',
        'values' => array(
            'UNREGISTERED' => 'NON REGISTRATO',
            'REGISTERED' => "REGISTRATO",
            'ACTIVE' => "ATTIVO",
            'LIMITED' => "FUNZIONALITÀ LIMITATE",
            'BLOCKED' => "BLOCCATO",
            'DELETED' => "CANCELLATO")
    ),
    'security_token' => 'Token di sicurezza',
    'api_password' => 'Password API',
    'location' => 'Luogo',
    'address' => 'Indirizzo',
    'postal' => 'CAP',
    'city' => 'Città',
    'province' => 'Provincia',
    'country' => 'Stato',
    'time_zone' => 'Time Zone',
    'play_start_time' => 'Inizio Play Musica',
    'play_end_time' => 'Fine Play Musica',
    'play_end_time_day_offset' => array(
        'label' => 'Giorno di Fine Playlist',
        'values' => array(
            0 => 'Stesso giorno',
            1 => 'Giorno successivo'
        )),
    'check_play_minutes_interval' => 'Intervallo in minuti per controllo Play',
    'files_update_time' => 'Orario di aggiornamento del Player',
    'loop_playlist' => array(
        'label' => 'Ripeti Playlist',
        'values' => array(
                0 => "No",
                1 => "Si"
            )
        ),
    'start_from_beginning' => array(
        'label' => 'Comincia sempre dal principio',
        'values' => array(
            0 => "No",
            1 => "Si"
        )
    ),
    'active' => array(
        'label' => 'Attivo',
        'values' => array(
            0 => 'Eliminato',
            1 => 'Attivo'
        )
    ),
    'playlists.tooltip' => 'Visualizza Playlist',
    'spots.tooltip' => 'Visualizza Spot',
    'player_notifications.tooltip' => 'Notifiche del Player',
    'created_at' => 'Aggiunto il',
    'actions' => 'Azioni',
    'create_playlist.tooltip' => 'Crea nuova playlist',
    'generate_update_package.tooltip' => 'Genera pacchetto aggiornamenti player'
);
