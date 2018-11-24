<?php

namespace App\Http\Controllers\Api\v1_0;

use App\Http\Controllers\Controller;

use Response;


class ApiController extends Controller {
    
    //token di sicurezza
    const API_PLAYER_SECURITY_TOKEN_KEY = "player_security_token";
    //registration_code, used for player instance registration
    const API_REGISTRATION_CODE_KEY = "registration_code";
    //cliente_id, player_id : used for player identification
    const API_CLIENTE_ID_KEY = "cliente_id";
    const API_PLAYER_ID_KEY = "player_id";
    //message : message sent from the player
    const API_MESSAGE_KEY = "message";
    //software_type : identifies the kind of a software produced by a vendor
    const API_SOFTWARE_NAME_KEY = "software_name";
    //software_version : the software version of the player
    const API_SOFTWARE_VERSION_KEY = "software_version";
    //software_vendor : the software vendor
    const API_SOFTWARE_VENDOR_KEY = "software_vendor";
    //specification : used inside notification for sending data
    const API_SPECIFICATION_KEY = "specification";
    // the current update id of the client
    const API_UPDATE_ID_KEY = "update_id";

    // the id of the dj
    const API_EMAIL_KEY="email";
    //the password of the dj
    const API_API_PASSWORD_KEY="api_password";

    //update check responses
    const UPDATE_CHECK_RESPONSE_NEW_UPDATE_AVAILABLE = "NEW UPDATE AVAILABLE";
    const UPDATE_CHECK_RESPONSE_NO_UPDATES_YET = "NO UPDATES YET";
    const UPDATE_CHECK_RESPONSE_ERROR_PREFIX = "ERROR : ";

}
