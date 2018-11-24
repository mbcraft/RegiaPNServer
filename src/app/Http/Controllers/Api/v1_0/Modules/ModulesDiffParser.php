<?php
/**
 * Created by PhpStorm.
 * User: marco
 * Date: 14/05/16
 * Time: 15.17
 */

namespace App\Http\Controllers\Api\v1_0\Modules;


use Illuminate\Http\Request;

class ModulesDiffParser
{
    private $modules = array();
    
    function parse(Request $req) {
        
        $count = $req->get("modules_count");

        \Log::debug("Found ".$count." diff modules ...");
        
        for ($i = 0;$i<$count;$i++) {
            $name = $req->get("module_".$i."__name");
            $module_diff = new ModuleDiff($name,$i);
            $module_diff->parse($req);
            $this->modules[$name] = $module_diff;
            \Log::debug("Module '".$name."' registered.");
        }
    }

    function getModuleByName($name) {
        if (isset($this->modules[$name]))
            return $this->modules[$name];
        else
            return new ModuleDiff($name,1);
    }

    function hasModule($name) {
        return isset($this->modules[$name]);
    }

    function getModules() {
        return $this->modules;
    }
}