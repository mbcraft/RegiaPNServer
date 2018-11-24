<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElemPlaylistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tab_elem_playlist', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger("ordine")->unsigned();
            $table->integer("playlist_id")->unsigned();
            $table->foreign("playlist_id")->references("id")->on("tab_playlists")->onDelete("cascade");
            $table->morphs("playable");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tab_elem_playlist');
    }
}
