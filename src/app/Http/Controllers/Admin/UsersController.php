<?php

namespace App\Http\Controllers\Admin;

use Mbcraft\Laravel\Http\Controllers\EntityController;
use Sentinel;
use View;
use Validator;
use Input;
use Redirect;
use URL;
use Mail;
use File;
use Cartalyst\Sentinel\Laravel\Facades\Activation;
use App\Models\Auth\User;
use Mbcraft\Laravel\Http\Controllers\Behaviours\Index;
use Mbcraft\Laravel\Http\Controllers\Behaviours\Show;
use Mbcraft\Laravel\Http\Controllers\Behaviours\Delete;
use Mbcraft\Laravel\Http\Controllers\Behaviours\Restore;

class UsersController extends EntityController {

    function __construct() {
        $this->LMessage = new \App\Lang\Users\LMessage();
    }

    protected $LMessage;

    /**
     * Declare the rules for the form validation
     *
     * @var array
     */
    protected $validationRules = array(
        'first_name' => 'required|min:3',
        'last_name' => 'required|min:3',
        'email' => 'required|email|unique:SENTINEL_users,email',
        'password' => 'between:8,64',
        'password_confirm' => 'same:password',
        'pic' => 'mimes:jpg,jpeg,bmp,png|max:10000',
        'phone' => 'max:16|string',
        'gender' => 'string|max:1',
        'dob' => 'date_format:d/m/Y',
        'indirizzo' => 'min:3|max:255|string',
        'cap' => 'min:3|max:8|string',
        'citta' => 'min:3|max:64|string',
        'provincia' => 'min:3|max:64|string',
        'stato' => 'string|max:2',
        'api_password' => 'between:8,64',
        
    );

    const MODEL_CLASS = 'App\Models\Auth\User';
    const VIEW_PREFIX = "admin.";
    const ROUTE_PREFIX = "admin.";

    use Index;

    /**
     * User create.
     *
     * @return View
     */
    public function getCreate() {
        // Get all the available groups
        $roles = Sentinel::getRoleRepository()->all();

        // Show the page
        return View::make('admin.users.create', compact('roles'));
    }

    /**
     * User create form processing.
     *
     * @return Redirect
     */
    public function postCreate() {
        // Create a new validator instance from our validation rules
        $validator = Validator::make(Input::all(), $this->validationRules);

        // If validation fails, we'll exit the operation now.
        if ($validator->fails()) {
            // Ooops.. something went wrong
            return Redirect::back()->withInput()->withErrors($validator);
        }

        //upload image
        if ($file = Input::file('pic')) {
            $fileName = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension() ? : 'png';
            $folderName = '/uploads/users/';
            $destinationPath = public_path() . $folderName;
            $safeName = str_random(10) . '.' . $extension;
            $file->move($destinationPath, $safeName);
        }

        //check whether use should be activated by default or not
        $activate = Input::get('activate') ? true : false;

        // Register the user
        $user = Sentinel::register(array(
                    'first_name' => Input::get('first_name'),
                    'last_name' => Input::get('last_name'),
                    'email' => Input::get('email'),
                    'password' => Input::get('password'),
                    'pic' => isset($safeName) ? $safeName : '',
                    'api_password' => Input::get('api_password'),
                    //ADD MISSING ATTRIBUTES HERE AND IN VIEW
                    'gender' => Input::get('gender'),
                    'dob' => Input::get('dob'),
                    'phone' => Input::get('phone'),
                    'indirizzo' => Input::get('indirizzo'),
                    'cap' => Input::get('cap'),
                    'citta' => Input::get('citta'),
                    'provincia' => Input::get('provincia'),
                    'stato' => Input::get('stato'),
                        /*
                          'facebook' => Input::get('facebook'),
                          'twitter' => Input::get('twitter'),
                          'google_plus' => Input::get('google_plus'),
                          'skype' => Input::get('skype'),
                          'flickr' => Input::get('flickr'),
                          'youtube' => Input::get('youtube')
                         */
                        ), $activate);


        //add user to selected group (eg. Admin, User ...) - only one is
        $roles = Input::get('roles');
        foreach ($roles as $r) {
            $role = Sentinel::findRoleById($r);
            $role->users()->attach($user);
        }

        //check for activation and send activation mail if not activated by default
        if (!$activate) {

            // Data to be used on the email view
            $data = array(
                'user' => $user,
                'activationUrl' => URL::route('activate', $user->id, Activation::create($user)->code),
            );

            // Send the activation code through email
            Mail::send('emails.register-activate', $data, function ($m) use ($user) {
                $m->to($user->email, $user->first_name . ' ' . $user->last_name);
                $m->subject('Welcome ' . $user->first_name);
            });
        }

        // Redirect to the home page with success menu
        return Redirect::route("admin.users.index")->with('success', $this->LMessage->success_created());
    }

    /**
     * User update.
     *
     * @param  int  $id
     * @return View
     */
    public function getEdit($id = null) {
        try {
            // Get the user information
            $user = User::findOrFail($id);

            // Get this user roles
            $userRoles = $user->getRoles()->lists('slug', 'id')->all();

            // Get a list of all the available groups
            $roles = Sentinel::getRoleRepository()->all();

            // Show the page
            return View::make('admin/users/edit', compact('user', 'roles', 'userRoles'));
        } catch (UserNotFoundException $e) {
            // Prepare the error message
            $error = $this->LMessage->userNotFound(compact('id'));

            // Redirect to the user management page
            return Redirect::route('admin.users.index')->with('error', $error);
        }
    }

    /**
     * User update form processing page.
     *
     * @param  int      $id
     * @return Redirect
     */
    public function postEdit() {
        try {
            $id = Input::get("id");
            // Get the user information
            $user = User::findOrFail($id);
        } catch (UserNotFoundException $e) {
            // Prepare the error message
            $error = $this->LMessage->userNotFound(compact('id'));

            // Redirect to the user management page
            return Redirect::route('admin.users.index')->with('error', $error);
        }

        //
        $this->validationRules['email'] = "required|email|unique:SENTINEL_users,email,{$user->email},email";

        $fields = ["first_name" => "*","last_name" => "*","email" => "*","password" => "Hash::make(*)","api_password" => "*","gender" => "*","phone" => "*","dob" => "*","indirizzo" => "*","cap" => "*","citta" => "*","provincia" => "*","stato" => "*"];
        
        foreach ($fields as $k => $f) {
            $field_name = $k;
            $$field_name = Input::get($k);
            if (!empty($$field_name)) {
                $value = eval("return ".str_replace("*","$".$k,$f).";");
                $user->{$k} = $value;
            } 
        }

        // Create a new validator instance from our validation rules
        $validator = Validator::make(Input::all(), $this->validationRules);

        // If validation fails, we'll exit the operation now.
        if ($validator->fails()) {
            // Ooops.. something went wrong
            return Redirect::back()->withInput()->withErrors($validator);
        }

        // is new image uploaded?
        if ($file = Input::file('pic')) {
            $fileName = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension() ? : 'png';
            $folderName = '/uploads/users/';
            $destinationPath = public_path() . $folderName;
            $safeName = str_random(10) . '.' . $extension;
            $file->move($destinationPath, $safeName);

            //delete old pic if exists
            if (File::exists(public_path() . $folderName . $user->pic)) {
                File::delete(public_path() . $folderName . $user->pic);
            }

            //save new file path into db
            $user->pic = $safeName;
        }

        // Get the current user groups
        $userRoles = $user->roles()->lists('id')->all();

        // Get the selected groups
        $selectedRoles = Input::get('roles', array());

        // Groups comparison between the groups the user currently
        // have and the groups the user wish to have.
        $rolesToAdd = array_diff($selectedRoles, $userRoles);
        $rolesToRemove = array_diff($userRoles, $selectedRoles);

        // Assign roles to user
        foreach ($rolesToAdd as $roleId) {
            $role = Sentinel::findRoleById($roleId);

            $role->users()->attach($user);
        }

        // Remove roles to user
        foreach ($rolesToRemove as $roleId) {
            $role = Sentinel::findRoleById($roleId);

            $role->users()->detach($user);
        }

        // Activate / De-activate user
        if (Input::has('activate')) {
            $status = $activation = Activation::completed($user);
            if (Input::get('activate') != $status) {
                if (Input::get('activate')) {
                    $activation = Activation::exists($user);
                    if ($activation) {
                        Activation::complete($user, $activation->code);
                    }
                } else {
                    //remove existing activation record
                    Activation::remove($user);
                    //add new record
                    Activation::create($user);

                    //send activation mail
                    $data = array(
                        'user' => $user,
                        'activationUrl' => URL::route('activate', $user->id, Activation::exists($user)->code),
                    );

                    // Send the activation code through email
                    Mail::send('emails.register-activate', $data, function ($m) use ($user) {
                        $m->to($user->email, $user->first_name . ' ' . $user->last_name);
                        $m->subject($this->LMessage->welcomeMailPrefix() . $user->first_name . $this->LMessage->welcomeMailSuffix());
                    });
                }
            }
        }
        // Was the user updated?
        if ($user->save()) {
            // Prepare the success message
            $success = $this->LMessage->success_updated();

            // Redirect to the user page
            return Redirect::route('admin.users.index')->with('success', $success);
        }

        // Prepare the error message
        $error = $this->LMessage->error_updated();


        // Redirect to the user page
        return Redirect::route('admin.users.index')->withInput()->with('error', $error);
    }

    use Delete;
    use Restore;
    use Show;
}
