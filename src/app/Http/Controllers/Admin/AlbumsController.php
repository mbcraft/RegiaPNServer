<?php

namespace App\Http\Controllers\Admin;

use App\Models\ElemPlaylist;
use Mbcraft\Laravel\Http\Controllers\EntityController;
use Mbcraft\Laravel\Http\Controllers\Behaviours\Index;
use Mbcraft\Laravel\Http\Controllers\Behaviours\Show;
use Mbcraft\Laravel\Http\Controllers\Behaviours\Delete;

class AlbumsController extends EntityController {
    
    const MODEL_CLASS = 'App\Models\Album';
    const VIEW_PREFIX = "admin.";
    const ROUTE_PREFIX = "admin.";
    
    use Index;
    use Show;
    use Delete;
    
    function __construct() {
        $this->LMessage = new \App\Lang\Albums\LMessage();
    }

    protected $LMessage;
    
    private $select_from_index = true;
    private $select_from_show = true;
    
}