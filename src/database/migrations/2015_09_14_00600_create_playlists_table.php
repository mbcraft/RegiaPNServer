<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaylistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tab_playlists', function (Blueprint $table) {
            $table->increments('id');
            $table->string("titolo",255);
            $table->enum("stato",["NOT_ACTIVE_OLD","NOT_ACTIVE","WORK_IN_PROGRESS","ACTIVE"])->default("WORK_IN_PROGRESS");
            $table->integer("player_id")->unsigned();
            $table->foreign("player_id")->references("id")->on("tab_players")->onDelete('cascade');
            $table->timestamps();
            
            $table->unique(['titolo','player_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tab_playlists');
    }
}
