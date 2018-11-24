<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNotesToPlaylist extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('tab_playlists', function (Blueprint $table) {
            $table->string("note")->nullable()->comment("Note.");
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
        Schema::table('tab_playlists', function (Blueprint $table) {
            $table->dropColumn("note");
        });
    }
}
