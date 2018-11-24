<?php

/**
 * Language file for system notifications table headings
 *
 */
return array(
    'id' => 'Id',
    'message' => 'Messaggio',
    'type' => array("label" => 'Tipo',
        "values" => array(
            "INFO" => "Informazioni",
            "WARNING" => "Warning",
            "ERROR" => "Errore Generale",
            "DEBUG" => "Messaggio di Debug"
        )),
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
