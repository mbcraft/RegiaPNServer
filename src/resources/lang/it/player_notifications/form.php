<?php

/**
 * Language file for player notifications table headings
 *
 */
return array(
    'id' => 'Id',
    'message' => 'Messaggio',  
    'type' => array 
        ("label" => 'Tipo notifica',
         "values" => array('PLAYER_ERROR' => 'Errore generico',
                'STATE_ERROR' => 'Errore di stato',
                'PARAMETERS_ERROR' => 'Parametri errati',
                'INSTANCE_REGISTERED' => 'Istanza registrata con successo',
                'INSTANCE_STARTED' => 'Istanza avviata',
                'SERVICE_STARTED' => 'Player musicale avviato',
                'SERVICE_STOPPED' => 'Player musicale fermato',
                'UPDATE_STARTED' => 'Aggiornamento iniziato',
                'UPDATE_COMPLETED' => 'Aggiornamento completato')
        ),
    'ip' => 'Indirizzo IP',
    'active' => array ('label' => 'Attiva',
                   'values' => array(
                      0 => 'Eliminata',
                      1 => 'Si'
                   )),
    'readed' => array(
        'label' => 'Letta',
        'values' => array(
            0 => "No",
            1 => "Si"
        )
    ),
    'created_at' => 'Creata il',
    'actions' => 'Azioni',
);
