<?php

/**
 * Language file for auth error messages
 *
 */
return array(
    'authorization_failed' => 'Autorizzazione negata.',
    'account_already_exists' => 'Un account con questo indirizzo email esiste gi&agrave;.',
    'account_not_found' => 'Username o password non valide.',
    'account_not_activated' => 'Questo account utente non &egrave; attivato.',
    'account_suspended' => 'Account sospeso a causa dei troppi tentativi di login. Provare di nuovo in un momento successivo.',
    'account_banned' => 'Questo account utente &egrave; bannato.',
    'throttling_exception' => 'Numero massimo di tentativi di login raggiunto.',
    'login' => array(
        'error' => 'C\'&egrave; stato un problema durante il tentativo di log in, per favore tentare di nuovo.',
        'success' => 'Hai effettuato il login con successo.',
    ),
    'signup' => array(
        'error' => 'C\'&egrave; stato un problema in fase di creazione dell\'account, per favore tentare di nuovo.',
        'success' => 'Account creato con successo.',
    ),
    'forgot-password' => array(
        'error' => 'C\'&egrave; stato un problema tentando di ottenere un codice per il reset della password, per favore tentare di nuovo.',
        'success' => 'Password di recupero email inviata con successo.',
    ),
    'forgot-password-confirm' => array(
        'error' => 'C\'&egrave; stato un problema durante il tentativo di reset della password, per favore tentare di nuovo.',
        'success' => 'La tua password &egrave; stata resettata con successo.',
    ),
    'activate' => array(
        'error' => 'C\'&egrave; stato un problema durante la fase di attivazione dell\'account, per favore tentare di nuovo.',
        'success' => 'Il tuo account &egrave; stato attivato con successo.',
    ),
);
