<?php

/**
 * Language file for playlist error/success messages
 *
 */
return array(
    'setting_exists' => 'Setting already exists!',
    'setting_not_found' => 'Setting [:id] does not exist.',
    'setting_key_required' => 'The key field is required',
    'setting_active' => 'Setting is active, can not be deleted',
    'success' => array(
        'create' => 'Setting was successfully created.',
        'update' => 'Setting was successfully updated.',
        'delete' => 'Setting was successfully deleted.',
    ),
    'delete' => array(
        'create' => 'There was an issue creating the setting. Please try again.',
        'update' => 'There was an issue updating the setting. Please try again.',
        'delete' => 'There was an issue deleting the setting. Please try again.',
    ),
    'error' => array(
        'setting_exists' => 'A setting already exists with this key in this context, key must be unique on the same context for settings.',
    ),
);
