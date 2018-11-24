<?php
/**
 * Created by PhpStorm.
 * User: marco
 * Date: 06/08/16
 * Time: 15.11
 */
namespace Mbcraft\Cryptography\Sca0\Php;

use Mbcraft\Piol\IWriter;
use Mbcraft\Piol\IReader;

class SCA0Impl {

    function encrypt(IReader $sourceStream,IWriter $destStream) {
        //start encoding algorithm
        $destStream->write(SCA0Utils::HEADER); //write header
        //write key length
        $klh = SCA0Utils::generateRandomKeyLength();
        $destStream->write(pack("H*", $klh));

        $kld = hexdec($klh);    //key length decimal value
        //write key
        $kh = SCA0Utils::generateRandomKey($kld); //key contains the full hex key
        $destStream->write(pack("H*", $kh));

        //put key data into int array for optimized use
        $keyInts = array();
        for ($i = 0; $i < strlen($kh) / 2; $i++)
            $keyInts[] = hexdec(substr($kh, $i * 2, 2));
        //encode and write data
        $kbi = 0;    //key byte index
        while ($sourceStream->available() > 0) {
            $toRead = $sourceStream->available() > 65536 ? 65536 : $sourceStream->available();
            $binbuf = $sourceStream->read($toRead);
            $hexbuf = join("", unpack("H*", $binbuf));
            $enc_h_st = ""; //encoded hex string
            for ($i = 0; $i < $toRead; $i++) {  //encode the chunk
                $hv = substr($hexbuf, $i * 2, 2); //2 hex chars as hex value
                $dv = hexdec($hv);  //decimal value
                $kv = $keyInts[$kbi++]; //key value to use
                $edv = ($dv + 256 + $kv) % 256; //encoded decimal value
                $ehv = str_pad(dechex($edv), 2, "0", STR_PAD_LEFT);    //encoded hex value
                $enc_h_st .= $ehv;  //add encoded hex value to encoded hex string
                $kbi%=$kld; //cycle the key byte index when necessary
            }

            $destStream->write(pack("H*", $enc_h_st));    //write encoded chunk
        }
    }

    function decrypt(IReader $sourceStream,IWriter $destStream) {
        //start decoding algorithm
        $h = SCA0Utils::HEADER;
        $header = $sourceStream->read(4); //parse and check header
        $header_st = unpack("C*", $header);
        for ($i = 0; $i < 4; $i++) {
            if (chr($header_st[1 + $i]) != $h[$i])
                throw new \Exception("Header invalid : " . var_export($header_st, true));
        }

        //read key length
        $klb = $sourceStream->read(2);
        $kla = unpack("n", $klb);
        $kld = $kla[1]; //kld contains the key length
        //read key
        $kb = $sourceStream->read($kld);
        $kh = join("", unpack("H*", $kb)); //kh contains the full hex key
        //put key data into int array for optimized use
        $keyInts = array();
        for ($i = 0; $i < strlen($kh) / 2; $i++)
            $keyInts[] = hexdec(substr($kh, $i * 2, 2));//keyInts contains all the key bytes into an array

        //decode and write data
        $kbi = 0;    //key byte index
        while ($sourceStream->available() > 0) {
            $toRead = $sourceStream->available() > 65536 ? 65536 : $sourceStream->available();
            $binbuf = $sourceStream->read($toRead);   //binary buffer to decrypt
            $hexbuf = join("", unpack("H*", $binbuf));    //hex buffer to decrypt
            $dec_h_st = "";   //decoded hex string
            for ($i = 0; $i < $toRead; $i++) {    //decode the chunk
                $hv = substr($hexbuf, $i * 2, 2);  // 2 hex chars as hex value
                $dv = hexdec($hv);  //decimal value
                $kv = $keyInts[$kbi++]; //key value to use
                $ddv = ( $dv + 256 - $kv ) % 256;   //decoded decimal value
                $dhv = str_pad(dechex($ddv), 2, "0", STR_PAD_LEFT);    //decoded hex value
                $dec_h_st .= $dhv;  //add decoded hex value to decoded string
                $kbi%=$kld; //cycle the key byte index when necessary
            }

            $destStream->write(pack("H*", $dec_h_st));     //write decoded chunk
        }
    }

}