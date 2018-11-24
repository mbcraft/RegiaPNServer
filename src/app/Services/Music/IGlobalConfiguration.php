<?php

namespace App\Services\Music;

/**
 * Costanti del file global.xml .
 *
 * 
 * @author Marco Bagnaresi <marco.bagnaresi@gmail.com>
 */
interface IGlobalConfiguration {
    //contesto
    const CONTEXT = "global";
    
    //nome del file
    const DEFAULT_GLOBAL_CONFIG_FILENAME = "global.xml";
    
    //id e messaggio
    const CLIENTE_ID_KEY = "cliente_id";   //id del cliente
    const PLAYER_ID_KEY = "player_id"; //id del player
    const MESSAGE_KEY = "message"; //eventuale messaggio allegato alla notifica
    
    //embedded http server
    const HTTP_ROOT_KEY = "http_root"; //cartella da usare come root del file server http
    
    //files
    const PLAYLIST_PATH_KEY = "playlist_path"; //nome del file della playlist
    const CONFIG_PATH_KEY = "config_path"; //nome del file di configurazione
    const OVERRIDE_GLOBAL_CONFIG_PATH_KEY = "override_global_config_path"; //nome con percorso da http root del file che effettua l'override della configurazione globale.
    
    //modules pattern list with save path
    const MODULE_SPEC_LIST_KEY = "module_spec_list";
    
    //update
    const UPDATE_REMOTE_HOST_KEY = "update_remote_host"; //host remoto dove effettuare gli update con rsync

    const UPDATE_CHECK_ADDRESS_KEY = "update_check_address"; //indirizzo della pagina in cui controllare la presenza di aggiornamenti
    const UPDATE_REQUEST_ADDRESS_KEY = "update_request_address"; //indirizzo della pagina a cui richiedere gli aggiornamenti
    const UPDATE_DOWNLOAD_ADDRESS_KEY = "update_download_address"; //indirizzo della pagina per scaricare l'aggiornamento
    const UPDATE_ID_KEY = "update_id";
    
    //api
    const API_VERSION_KEY = "api_version";

    //notification addresses
    const INSTANCE_STARTED_NOTIFICATION_ADDRESS_KEY = "instance_started_notification_address";    //pagina a cui segnalare l'avvio dell'istanza configurata
    const SERVICE_STARTED_NOTIFICATION_ADDRESS_KEY = "service_started_notification_address";    //pagina a cui segnalare l'avvio del play della musica
    const SERVICE_STOPPED_NOTIFICATION_ADDRESS_KEY = "service_stopped_notification_address";    //pagina a cui segnalare lo stop del play della musica
    const UPDATE_STARTED_NOTIFICATION_ADDRESS_KEY = "update_started_notification_address";  //pagina a cui segnalare l'inizio del download dei files
    const UPDATE_COMPLETED_NOTIFICATION_ADDRESS_KEY = "update_completed_notification_address";  //pagina a cui segnalare la fine del download dei files
    const ERROR_NOTIFICATION_ADDRESS_KEY = "error_notification_address"; //pagina a cui notificare gli errori
    
    //security tokens
    const CLIENTE_SECURITY_TOKEN_KEY = "cliente_security_token";   //security token del cliente, non viene mai modificato
    const PLAYER_SECURITY_TOKEN_KEY = "player_security_token";   //security token del player, non viene mai modificato

    //diff modules specification
    const MODULES_DIFF_SPECIFICATION_KEY = "modules_diff_specification"; //elenco dei moduli con path per la gestione della diff

    //processing
    const BACKGROUND_SCAN_AND_ENCODING_ENABLED_KEY = "background_scan_and_encoding_enabled";

    //default player time zone
    const DEFAULT_COUNTRY_KEY = "default_country";
    const DEFAULT_TIME_ZONE_KEY = "default_time_zone";
    //------------------------------------------------------
}
