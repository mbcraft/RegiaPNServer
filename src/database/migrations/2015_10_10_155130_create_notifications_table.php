<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tab_player_notifications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("player_id")->unsigned();
            $table->foreign("player_id")->references("id")->on("tab_players");
            
            $table->string("message",255);
            $table->enum("type",["INTERNAL_ERROR","STATE_ERROR","PARAMETERS_ERROR","INSTANCE_REGISTERED","INSTANCE_STARTED","SERVICE_STARTED","SERVICE_STOPPED","UPDATE_STARTED","UPDATE_COMPLETED"]);
            $table->string("ip",32);
            $table->timestamps();
            $table->softDeletes();
            
            $table->index("player_id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tab_player_notifications');
    }
}
