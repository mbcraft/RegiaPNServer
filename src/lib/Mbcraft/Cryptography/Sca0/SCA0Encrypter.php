<?php

namespace Mbcraft\Cryptography\Sca0;

use Mbcraft\Piol\File;
use Mbcraft\Piol\Dir;

use Mbcraft\Command\CmdHelper;

/**
 * Ecrypt a stream using the SCA-0 algorithm.
 * The algorithm processes the stream byte-to-byte.
 * Using the key as cycled byte array, add the key byte to the current 
 * data byte % 256
 */
class SCA0Encrypter {

    private $sourceFile;
    private $destFile;

    /**
     * Construct a new encrypter for encrypting a file of arbitrary size.
     * 
     * @param \Mbcraft\Piol\File $source  The file reader of the readable file
     * @param \Mbcraft\Piol\File $dest    The file writer to use for writing the crypted file
     */
    function __construct(File $source, File $dest) {
        $this->sourceFile = $source;
        $this->destFile = $dest;
    }

    function encrypt() {
        if (!$this->javaEncryptImpl()) {
            $this->phpEncryptImpl();
        }
    }
    
    private function javaEncryptImpl() {
        $jar = new File("lib/Mbcraft/Cryptography/Sca0/Java/Sca0Encrypter.jar");
        if (!$jar->exists()) {
            \Log::debug("FAST ENCRYPTION NOT FOUND!!!!!");
            return false;
        }
        $command = 'java -jar '.$jar->getFullPath().' --urlinput "'.urlencode($this->sourceFile->getFullPath()).'" --output "'.$this->destFile->getFullPath().'"';
        \Log::debug("Running command : ".$command);
        
        $output = CmdHelper::runCommand(new Dir("/storage/tmp/"),$command);

        $successful = false;
        
        if ($this->destFile->exists() && $this->destFile->getSize()>0) {
            $successful = true;
        } else {
            foreach ($output as $i => $line) {
                if (strcmp(trim($line), "ENCRYPT DONE.")===0) {
                    $successful = true;
                }
            }
        }
        
        return $successful;
    }
    
    /**
     * Actually does the encryption.
     */
    private function phpEncryptImpl() {
        $sourceStream = $this->sourceFile->openReader();
        $destStream = $this->destFile->openWriter();
        
        //empty destinarion file
        $destStream->truncate(0);

        $sca0 = new SCA0();
        $sca0->encrypt($sourceStream,$destStream);

        //close source and dest streams
        $sourceStream->close();
        $destStream->close();
    }

}
