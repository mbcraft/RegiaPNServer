<?php
/**
 * Created by PhpStorm.
 * User: marco
 * Date: 14/05/16
 * Time: 15.15
 */

namespace App\Http\Controllers\Api\v1_0\Modules;


class FileInfo
{
    private $path,$size,$digest;

    function __construct($path,$size,$digest)
    {
        $this->path = urldecode($path);
        $this->size = $size;
        $this->digest = $digest;

        \Log::debug("FileInfo readed : ".$this->path." size=".$this->size." digest=".$this->digest);
    }

    function getPath() {
        return $this->path;
    }

    function getSize() {
        return $this->size;
    }

    function getDigest() {
        return $this->digest;
    }
}