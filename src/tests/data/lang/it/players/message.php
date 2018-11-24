<?php
/**
* Language file for player error/success messages
*
*/

return array(

    'update_package_generation' => array(
        'success' => "Generazione del pacchetto di aggiornamenti completata con successo!",
        'failure' => "Si &egrave; verificato un errore in fase di generazione del pacchetto di aggiornamenti del player."
    ),
    
    'player_exists'        => 'Il Player esiste gi&agrave;!',
    'player_not_found'     => 'Il Player [:id] non esiste.',
    'player_unique_label_required' => 'L\'Etichetta Univoca &egrave; richiesta.',
    'player_exists'        => 'Il Player contiene delle playlist, il player non pu&ograve; essere eliminato',

    'success' => array(
        'created' => 'Il Player &egrave; stato creato con successo.',
        'updated' => 'Il Player &egrave; stato aggiornato con successo.',
        'deleted' => 'Il Player &egrave; stato cancellato con successo.',
        'restored' => 'Il Player &egrave; stato ripristinato con successo.',
    ),

    'delete' => array(
        'created' => 'C\'&egrave; stato un problema in fase di creazione del player. Riprovare di nuovo.',
        'updated' => 'C\'&egrave; stato un problema in fase di aggiornamento del player. Riprovare di nuovo.',
        'deleted' => 'C\'&egrave; stato un problema in fase di cancellazione del player. Riprovare di nuovo.',
        'restored' => 'C\'&egrave; stato un problema in fase di ripristino del player. Riprovare di nuovo.',
    
    ),

    'error' => array(
        'player_exists' => 'Un player esiste gi&agrave; con questa Etichetta Univoca, l\'Etichetta Univoca deve essere unica per i player dello stesso cliente.',
    ),

);
