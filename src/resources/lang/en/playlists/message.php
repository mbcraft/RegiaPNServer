<?php

/**
 * Language file for playlist error/success messages
 *
 */
return array(
    'playlist_exists' => 'Playlist already exists!',
    'playlist_not_found' => 'Playlist [:id] does not exist.',
    'playlist_title_required' => 'The title field is required',
    'playlist_active' => 'Playlist is active, can not be deleted',
    'success' => array(
        'create' => 'Playlist was successfully created.',
        'update' => 'Playlist was successfully updated.',
        'delete' => 'Playlist was successfully deleted.',
    ),
    'delete' => array(
        'create' => 'There was an issue creating the playlist. Please try again.',
        'update' => 'There was an issue updating the playlist. Please try again.',
        'delete' => 'There was an issue deleting the playlist. Please try again.',
    ),
    'error' => array(
        'playlist_exists' => 'A playlist already exists with that title on this player, titles must be unique on the same player for playlists.',
    ),
);
