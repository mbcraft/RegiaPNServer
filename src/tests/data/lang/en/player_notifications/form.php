<?php

/**
 * Language file for player notifications table headings
 *
 */
return array(
    'id' => 'Id',
    'message' => 'Message',
    'type' => array('label' => 'Type',
        'values' => array(
            'PLAYER_ERROR' => 'Generic error',
            'STATE_ERROR' => 'State error',
            'PARAMETERS_ERROR' => 'Parameters error',
            'INSTANCE_REGISTERED' => 'Instance registered succesfully',
            'INSTANCE_STARTED' => 'Istance started',
            'MEDIA_PLAYER_STARTED' => 'Media player started',
            'MEDIA_PLAYER_STOPPED' => 'Media player stopped',
            'UPDATE_STARTED' => 'Update started',
            'UPDATE_COMPLETED' => 'Update completed'
        )),
    'active' => array ('label' => 'Active',
                       'values' => array(
                          0 => 'Eliminata',
                          1 => '-'
                       )),
    'created_at' => 'Created at',
    'actions' => 'Actions',
);
