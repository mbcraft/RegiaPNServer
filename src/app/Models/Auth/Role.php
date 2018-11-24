<?php

namespace App\Models\Auth;

use Cartalyst\Sentinel\Roles\EloquentRole;

class Role extends EloquentRole {
    
    protected $table = "SENTINEL_roles";
    
    /**
     * The Eloquent users model name.
     *
     * @var string
     */
    protected static $usersModel = 'App\Models\Auth\User';
    
    /**
     * The Users relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(static::$usersModel, 'SENTINEL_role_users', 'role_id', 'user_id')->withTimestamps();
    }
    
}
