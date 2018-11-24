<?php

namespace App\Services\Music;

use Mbcraft\Piol\Dir;
use Mbcraft\Piol\File;
use Mbcraft\Cryptography\Sca0\SCA0Encrypter;
use App\Models\IPlayable;

class AbstractEncryptionService {

    /**
     * Returns the file extension for the current encryption algorithm.
     * 
     * @return string The file extension for the encrypted files, beginning with dot.
     */
    public static function getEncryptedFileExtension() {
        return "." . strtolower(self::getEncryption());
    }

    /**
     * Returns the encryption algorithm.
     * 
     * @return string The encryption algorithm.
     */
    public static function getEncryption() {
        return IPlayerConfiguration::CRYPTOGRAPHY_ALGORITHM_NAME . IPlayerConfiguration::CRYPTOGRAPHY_ALGORITHM_VERSION;
    }

    /**
     * Returns the encryption algorithm in camel case format.
     * 
     * @return string The encryption algorithm.
     */
    public static function getCamelCaseEncryption() {
        return ucfirst(strtolower(IPlayerConfiguration::CRYPTOGRAPHY_ALGORITHM_NAME . IPlayerConfiguration::CRYPTOGRAPHY_ALGORITHM_VERSION));
    }

    /**
     * Creates the dir for the encrypted files if necessary, encrypt
     * the track and saves the status on the IPlayable model.
     * 
     * @param Dir $crypt_dir The directory in which save the track
     * @param File $f_source The source track file
     * @param IPlayable $playable The playable object to update
     */
    protected function encryptAndSave(Dir $crypt_dir, File $f_source, IPlayable $playable) {
        $crypt_dir->touch();

        $f_crypt = $crypt_dir->newFile($playable->getProtectedFilename());

        $encrypter = new SCA0Encrypter($f_source,$f_crypt);
        $encrypter->encrypt();
        
        $playable->crypted = true;
        $playable->protected_file_size = $f_crypt->getSize();
        $playable->protected_file_digest = $f_crypt->getContentHash();

        $playable->save();

    }

}
