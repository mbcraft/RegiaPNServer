<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPlaylistsDjIdToPlayer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('tab_players', function (Blueprint $table) {
            $table->integer("playlists_dj_id")->unsigned()->nullable()->default(null)->comment("Dj abilitato a gestire le playlist.");
            $table->foreign("playlists_dj_id")->references("id")->on("SENTINEL_users");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('tab_players', function (Blueprint $table) {
            $table->dropColumn("playlists_dj_id");
        });
    }
}
