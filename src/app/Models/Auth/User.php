<?php

namespace App\Models\Auth;

use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Auth\Authenticatable;
use Sentinel;
use Gate;
use Cartalyst\Sentinel\Users\EloquentUser;
use Illuminate\Database\Eloquent\SoftDeletes;
use Mbcraft\Laravel\Models\INameable;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
//use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;


class User extends EloquentUser implements INameable,AuthenticatableContract,AuthorizableContract {

    use Authorizable,Authenticatable;

    use SoftDeletes;
    
    protected $table = "SENTINEL_users";
    
    protected $fillable = ['pic','email','password','permissions','first_name','last_name','gender','dob','phone','indirizzo','cap','citta','provincia','stato','api_password', 'reset_password_code'];

    protected $dates = ['deleted_at','created_at','updated_at'];
    
    
    /**
     * Returns the roles relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany(static::$rolesModel, 'SENTINEL_role_users', 'user_id', 'role_id')->withTimestamps();
    }
    
    /**
     * The Eloquent roles model name.
     *
     * @var string
     */
    protected static $rolesModel = 'App\Models\Auth\Role';

    /**
     * The Eloquent persistences model name.
     *
     * @var string
     */
    protected static $persistencesModel = 'App\Models\Auth\Persistence';

    /**
     * The Eloquent activations model name.
     *
     * @var string
     */
    protected static $activationsModel = 'App\Models\Auth\Activation';

    /**
     * The Eloquent reminders model name.
     *
     * @var string
     */
    protected static $remindersModel = 'App\Models\Auth\Reminder';

    /**
     * The Eloquent throttling model name.
     *
     * @var string
     */
    protected static $throttlingModel = 'App\Models\Auth\Throttle';

    /**
     * Returns a value indicating if this user has the sys-admin role.
     *
     * @return bool true if this user is a sys-admin, false otherwise.
     */
    public function isSysAdmin() {
        return $this->hasAccess('sys-admin');
    }

    /**
     * Returns a value indicating if this user has the manage-users role.
     *
     * @return bool true if this user can manage users, false otherwise.
     */
    public function isUserManager() {
        return $this->hasAccess('manage-users');
    }

    /**
     * Returns a value indicating if this user has the manage-customers role.
     *
     * @return bool true if this user is-a customer manager, false otherwise
     */
    public function isCustomerManager() {
        return $this->hasAccess('manage-customers');
    }

    /**
     * Returns a value indicating if this user has the playlist-editor role.
     *
     * @return bool true if this user is-a playlist editor, false otherwise
     */
    public function isPlaylistEditor() {
        return $this->hasAccess('playlist-editor');
    }

    /**
     * Returns the reset password code for this user.
     *
     * @return string The reset password code
     */
    public function getResetPasswordCode() {
        return $this->reset_password_code;
    }

    /**
     * Returns all the users with the sys-admin role.
     *
     * @return array All the User-s with the sys-admin permission.
     */
    public static function getAllSysAdmin() {

        return User::whereHas('roles',function($query) {
            $query->where('name','Sys Admin');
        })->get();

    }

    /**
     * Returns all the users with the user-manager role.
     *
     * @return array All the User-s with the user-manager permission.
     */
    public static function getAllUserManager() {

        return User::whereHas('roles',function($query) {
            $query->where('name','User Manager');
        })->get();

    }

    /**
     * Returns all the users with the customer-manager role.
     *
     * @return array All the User-s with the customer-manager permission.
     */
    public static function getAllCustomerManager() {

        return User::whereHas('roles',function($query) {
            $query->where('name','Customer Manager');
        })->get();

    }

    /**
     * Returns all the users with the playlist-editor role.
     *
     * @return array All the User-s with the playlist-editor permission.
     */
    public static function getAllPlaylistEditor() {

        return User::whereHas('roles',function($query) {
            $query->where('name','Playlist Editor');
        })->get();

    }

    /**
     * Returns the roles available to a user when editing the roles of one another
     *
     * @return array
     */
    public function getRolesForUserEditing() {
        if (Gate::allows('canEditSysAdminRole',Sentinel::getUser())) {
            return Role::all();
        } else {
            return Role::where('name','!=','Sys Admin')->get();
        }
    }

    /**
     * @see INameable::one_entity()
     */
    public static function one_entity() {
        return "user";
    }

    /**
     * @see INameable::many_entities()
     */
    public static function many_entities() {
        return "users";
    }
}