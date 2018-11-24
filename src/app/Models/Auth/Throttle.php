<?php

namespace App\Models\Auth;

use Cartalyst\Sentinel\Throttling\EloquentThrottle;

class Throttle extends EloquentThrottle {
    
    protected $table = "SENTINEL_throttle";
}