<?php

namespace Mbcraft\Command;

use Mbcraft\Piol\File;
use Mbcraft\Piol\Dir;

/**
 * This class helps in running shell commands.
 */
class CmdHelper {

    /**
     * Runs a command and returns the result.
     * 
     * @param \Mbcraft\Piol\Dir $tmp_storage_dir The temporary storage directory used for storing the command output.
     * @param string $command The command to run, with all parameters.
     * @return array the result lines as an array
     * @throws \Exception If something goes wrong
     */
    static function runCommand($tmp_storage_dir,$command,$needs_output = true) {
        
        //\Log::debug("Trying to run command : ".$command);
        
        if ($tmp_storage_dir !== null) {
            File::setTmpFileDir(new Dir($tmp_storage_dir));
            $out_file = File::newTempFile();
            $dest = $out_file->getFullPath();
        } else
            $dest = "&1";

        $final_command = "$command 2>" . $dest;

        exec($final_command, $lines);
        
        if (!$needs_output) return;

        if ((count($lines) < 2 || strlen(join('', $lines)) < 20) && $dest !== "&1") {
            $lines = array_filter(explode("\n", $out_file->getContent()), function($v) {
                if (strlen(trim($v)) == 0)
                    return false;
                else
                    return true;
            });
            $out_file->delete();
        }
        
        return $lines;
    }

}