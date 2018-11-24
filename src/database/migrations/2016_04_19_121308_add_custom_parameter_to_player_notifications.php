<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCustomParameterToPlayerNotifications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tab_player_notifications', function (Blueprint $table) {

            $table->string("specification")->nullable();
                        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tab_player_notifications', function (Blueprint $table) {

            $table->dropColumn("specification");
          
        });
    }
}
