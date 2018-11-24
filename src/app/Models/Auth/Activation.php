<?php

namespace App\Models\Auth;

use Cartalyst\Sentinel\Activations\EloquentActivation;

class Activation extends EloquentActivation {
    
    protected $table = "SENTINEL_activations";
}