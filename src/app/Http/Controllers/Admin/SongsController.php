<?php

namespace App\Http\Controllers\Admin;

use Mbcraft\Laravel\Http\Controllers\EntityController;

use Mbcraft\Laravel\Http\Controllers\Behaviours\Index;
use Mbcraft\Laravel\Http\Controllers\Behaviours\Show;
use Mbcraft\Laravel\Http\Controllers\Behaviours\Delete;

class SongsController extends EntityController {

    function __construct() {
        $this->LMessage = new \App\Lang\LMessage();
    }
    
    protected $LMessage;
    
    const MODEL_CLASS = 'App\Models\Song';
    const VIEW_PREFIX = "admin.";
    const ROUTE_PREFIX = "admin.";
    
    private $select_from_show = true;

    use Index;
    use Show;
    use Delete;
    
}