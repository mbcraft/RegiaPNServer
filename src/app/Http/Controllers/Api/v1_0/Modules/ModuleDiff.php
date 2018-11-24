<?php
/**
 * Created by PhpStorm.
 * User: marco
 * Date: 14/05/16
 * Time: 15.15
 */

namespace App\Http\Controllers\Api\v1_0\Modules;


use Illuminate\Http\Request;

class ModuleDiff
{
    private $module_name;
    private $module_index;
    private $file_infos = array();
    
    function __construct($name,$index) {
        $this->module_name = $name;
        $this->module_index = $index;
    }

    function parse(Request $req) {
        $file_count = $req->get("module_".$this->module_index."__file_count");
        for ($i=0;$i<$file_count;$i++) {
            $path = $req->get("m_".$this->module_index."_".$i."_p");
            $size = $req->get("m_".$this->module_index."_".$i."_s");
            $digest = $req->get("m_".$this->module_index."_".$i."_d");
            $info = new FileInfo($path,$size,$digest);
            $this->file_infos[] = $info;
        }
    }

    public function canSkipPlayable($playable) {

        foreach ($this->file_infos as $file_info) {

            if ($playable->protected_file_size == $file_info->getSize()) {
                if ($playable->protected_file_digest == $file_info->getDigest())
                {
                    \Log::debug("File already stored for module ".$this->module_name." : ".$file_info->getPath());
                    return true;
                }
            }
        }
        return false;
    }

    public function getModuleName() {
        return $this->module_name;
    }

    public function getFileInfos() {
        return $this->file_infos;
    }
}