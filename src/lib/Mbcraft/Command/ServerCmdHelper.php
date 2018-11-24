<?php

namespace Mbcraft\Command;

/**
 * This class helps in running shell commands.
 */
class ServerCmdHelper {

    /**
     * Runs a command and returns the result.
     * 
     * @param \Mbcraft\Piol\Dir $tmp_storage_dir The temporary storage directory used for storing the command output.
     * @param string $command The command to run, with all parameters.
     * @return array the result lines as an array
     * @throws \Exception If something goes wrong
     */
    static function runCommand($command,$parameters,$port=8081) {

        $ch = curl_init("http://localhost:".$port."/".$command);
        curl_setopt($ch, CURLOPT_POST, "POST");
        curl_setopt($ch, CURLOPT_FAILONERROR, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        if (is_string($parameters)) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, urlencode($parameters));
        }
        if (is_array($parameters)) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, $parameters);
        }
        $response = curl_exec($ch);

        return $response;
        
    }

}