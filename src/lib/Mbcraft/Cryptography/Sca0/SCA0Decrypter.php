<?php

namespace Mbcraft\Cryptography\Sca0;

use Mbcraft\Cryptography\Sca0\Php\SCA0Impl;
use Mbcraft\Piol\File;

/**
 * Decrypts a stream using the SCA-0 algorithm.
 * The algorithm processes the stream byte-to-byte.
 * Using the key as cycled byte array, subtract the key byte from 
 * the current data byte % 256.
 */
class SCA0Decrypter {

    private $sourceFile;
    private $destFile;

    /**
     * Construct a new decrypter for decrypting a file of arbitrary size.
     * 
     * @param \Mbcraft\Piol\FileReader $source  The file reader of the encoded file
     * @param \Mbcraft\Piol\FileWriter $dest    The file writer to use for writing the decrypted file
     */
    function __construct(File $source, File $dest) {
        $this->sourceFile = $source;
        $this->destFile = $dest;
    }

    public function decrypt() {
        $this->phpDecryptImpl();
    }
    
    /**
     * Actually executes the decryption.
     * 
     * @throws \Exception If the data header does not match.
     */
    private function phpDecryptImpl() {
        
        $sourceStream = $this->sourceFile->openReader();
        $destStream = $this->destFile->openWriter();
        
        //empty destination file
        $destStream->truncate(0);

        $sca0 = new SCA0Impl();
        $sca0->decrypt($sourceStream,$destStream);

        //close source and dest streams
        $sourceStream->close();
        $destStream->close();
    }

}
