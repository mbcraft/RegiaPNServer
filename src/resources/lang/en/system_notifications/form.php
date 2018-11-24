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
            "INFO" => "Information",
            "WARNING" => "System Warning",
            "ERROR" => "System Error",
            "DEBUG" => "Debug Message"
        )),
    'active' => array ('label' => 'Active',
                   'values' => array(
                      0 => 'Eliminata',
                      1 => '-'
                   )),
    'created_at' => 'Created at',
    'actions' => 'Actions',
);
