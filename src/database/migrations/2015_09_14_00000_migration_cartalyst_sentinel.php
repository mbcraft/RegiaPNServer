<?php

/**
 * Part of the Sentinel package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.
 *
 * @package    Sentinel
 * @version    2.0.7
 * @author     Cartalyst LLC
 * @license    BSD License (3-clause)
 * @copyright  (c) 2011-2015, Cartalyst LLC
 * @link       http://cartalyst.com
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;


class MigrationCartalystSentinel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SENTINEL_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pic')->nullable();
            $table->string('email',64);
            $table->string('password',64);
            $table->text('permissions')->nullable();
            $table->timestamp('last_login')->nullable();
            $table->string('first_name',32)->nullable();
            $table->string('last_name',32)->nullable();
            $table->string('gender',1)->nullable();
            $table->string('dob',16)->nullable();
            $table->string('phone',16)->nullable();
            
            $table->string("indirizzo",255)->nullable();
            $table->string("cap",8)->nullable();
            $table->string("citta",64)->nullable();
            $table->string("provincia",64)->nullable();
            $table->string("stato",2)->nullable()->comment("Codice di 2 lettere che rappresenta lo stato.");
            
            $table->string('api_password',64)->nullable();
            $table->string('reset_password_code',10)->comment("Codice per resettare la password");
            
            $table->timestamps();

            $table->softDeletes();

            $table->unique('email');
        });
        
        Schema::create('SENTINEL_activations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign("user_id")->references("id")->on("SENTINEL_users");
            $table->string('code');
            $table->boolean('completed')->default(0);
            $table->timestamp('completed_at')->nullable();
            $table->timestamps();

        });

        Schema::create('SENTINEL_persistences', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign("user_id")->references("id")->on("SENTINEL_users");
            $table->string('code');
            $table->timestamps();

            $table->unique('code');
        });

        Schema::create('SENTINEL_reminders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign("user_id")->references("id")->on("SENTINEL_users");
            $table->string('code');
            $table->boolean('completed')->default(0);
            $table->timestamp('completed_at')->nullable();
            $table->timestamps();
        });

        Schema::create('SENTINEL_roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug');
            $table->string('name');
            $table->text('permissions')->nullable();
            $table->timestamps();

            $table->unique('slug');
        });

        Schema::create('SENTINEL_role_users', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->foreign("user_id")->references("id")->on("SENTINEL_users");
            
            $table->integer('role_id')->unsigned();
            $table->foreign("role_id")->references("id")->on("SENTINEL_roles");
            
            $table->nullableTimestamps();

            $table->primary(['user_id', 'role_id']);
        });

        Schema::create('SENTINEL_throttle', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign("user_id")->references("id")->on("SENTINEL_users");
            
            $table->string('type');
            $table->string('ip')->nullable();
            $table->timestamps();

            $table->index('user_id');
        });
        
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('SENTINEL_activations');
        Schema::drop('SENTINEL_persistences');
        Schema::drop('SENTINEL_reminders');
        Schema::drop('SENTINEL_role_users');
        Schema::drop('SENTINEL_throttle');
        Schema::drop('SENTINEL_roles');
        Schema::drop('SENTINEL_users');
    }
}