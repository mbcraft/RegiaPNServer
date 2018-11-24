<?php

use Cartalyst\Sentinel\Laravel\Facades\Sentinel;

class UserRolesTableSeeder extends DatabaseSeeder {

    public function run() {

        $sysAdminRole = Sentinel::getRoleRepository()->createModel()->create([
            'name' => 'Sys Admin',
            'slug' => 'sys-admin',
            'permissions' => array('sys-admin' => true),
        ]);
        
        $userManagerRole = Sentinel::getRoleRepository()->createModel()->create([
            'name' => 'User Manager',
            'slug' => 'user-manager',
            'permissions' => array('manage-users' => true),
        ]);
        
        $customerManagerRole = Sentinel::getRoleRepository()->createModel()->create([
            'name' => 'Customer Manager',
            'slug' => 'customer-manager',
            'permissions' => array('manage-customers' => true)
        ]);

        $playlistEditorRole = Sentinel::getRoleRepository()->createModel()->create([
            'name' => 'Playlist Editor',
            'slug' => 'playlist-editor',
            'permissions' => array('playlist-editor' => true)
        ]);
        
        $admin = Sentinel::registerAndActivate(array(
                    'email' => 'admin@admin.com',
                    'password' => "adminpwd",
                    'first_name' => 'Marco',
                    'last_name' => 'Bagnaresi',
                    'api_password' => 'km34Rg_12x6',
                    'reset_password_code' => '91235428'
            
        ));
        
        $admin->roles()->attach($sysAdminRole);
        $admin->roles()->attach($userManagerRole);
        $admin->roles()->attach($customerManagerRole);
        $admin->roles()->attach($playlistEditorRole);
        


        $dj = Sentinel::registerAndActivate(array(
                    'email' => 'marco.bagnaresi@gmail.com',
                    'password' => "useruser",
                    'first_name' => 'M',
                    'last_name' => 'B',
                    'reset_password_code' => '43937562'
        ));
        
        $dj->roles()->attach($playlistEditorRole);
    }

}
