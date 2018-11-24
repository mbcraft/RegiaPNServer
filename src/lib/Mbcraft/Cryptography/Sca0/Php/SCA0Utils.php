<?php

namespace Mbcraft\Cryptography\Sca0\Php;

class SCA0Utils {

    const MIN_KEY_LENGTH = 1024;
    const MAX_KEY_LENGTH = 32767;

    const HEADER = "SCA0";  //SCA0
    public static $HEADER_BYTES = [83,67,65,48];

    static function checkHeaderBytes(array $data) {
        if (sizeof($data) != sizeof(self::$HEADER))
            throw new \Exception("Header length is wrong.");
        for ($i = 0; i < sizeof(self::$HEADER); $i++) {
            if ($data[$i] != self::$HEADER[$i])
                throw new \Exception("Header data invalid.");
        }
    }

    /**
     * Returns a random key length as an hexadecimal string.
     * 
     * @return string A random key length as an hexadecimal string.
     */
    static function generateRandomKeyLength() {
        return str_pad(dechex(rand(1024,32767)),4,"0",STR_PAD_LEFT);
    }

    /**
     * Generate a random key in hexadecimal format.
     * 
     * @param int $key_length the length of the key
     * @return string an hexadecimal key
     */
    static function generateRandomKey($key_length) {
        $key = "";
        for ($i=0;$i<$key_length;$i++) {
            $key.= self::generateRandomKeyByte();
        }
        return $key;
    }

    /**
     * Generates a random key byte value as an hexadecimal string.
     * 
     * @return type
     */
    static function generateRandomKeyByte() {
        $h = str_pad(dechex(rand(0, 255)),2,"0",STR_PAD_LEFT);
        return $h;
    }



}

