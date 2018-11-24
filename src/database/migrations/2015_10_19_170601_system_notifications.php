<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SystemNotifications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tab_system_notifications', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string("message",255);
            $table->enum("type",["INFO","WARNING","ERROR","DEBUG"]);
            $table->boolean("readed")->default(false);
            $table->timestamps();
            $table->softDeletes();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tab_system_notifications');
    }
}
