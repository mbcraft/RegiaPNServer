<?php

namespace App\Models\Auth;

use Cartalyst\Sentinel\Persistences\EloquentPersistence;

class Persistence extends EloquentPersistence {
    
    protected $table = "SENTINEL_persistences";
    
    /**
     * The users model name.
     *
     * @var string
     */
    protected static $usersModel = 'App\Models\Auth\User';
}