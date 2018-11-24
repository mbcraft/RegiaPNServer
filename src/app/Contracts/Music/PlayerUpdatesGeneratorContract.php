<?php

namespace App\Contracts\Music;


interface PlayerUpdatesGeneratorContract {
    
    /**
     * Generates a full update package for a player, using all the
     * modules listed in modules_spec_list. The archive is crypted using
     * the player_security_token as a key.
     */
    function generateUpdatePackage($module_diff_parser,$player_id,$software_vendor,$software_name,$software_version);
    
    /**
     * Deletes all the update packages built so far for a specific player.
     */
    function clearLastUpdatePackage($player_id);
    
}