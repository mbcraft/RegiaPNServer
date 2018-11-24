<?php
/**
* Language file for player error/success messages
*
*/

return array(

    'player_exists'        => 'Player already exists!',
    'player_not_found'     => 'Player [:id] does not exist.',
    'player_unique_label_required' => 'The unique label field is required',
    'player_exists'        => 'Player contains playlists, player can not be deleted',

    'success' => array(
        'create' => 'Player was successfully created.',
        'update' => 'Player was successfully updated.',
        'delete' => 'Player was successfully deleted.',
    ),

    'delete' => array(
        'create' => 'There was an issue creating the player. Please try again.',
        'update' => 'There was an issue updating the player. Please try again.',
        'delete' => 'There was an issue deleting the player. Please try again.',
    ),

    'error' => array(
        'player_exists' => 'A player already exists with that unique label, unique_label must be unique for players of the same customer.',
    ),

);
