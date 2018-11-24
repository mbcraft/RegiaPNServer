<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStartFromBeginningToPlaylist extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('tab_players',function(Blueprint $table) {
            $table->boolean("start_from_beginning")->default(false)->comment("Indica se la playlist deve sempre cominciare dal principio.");
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
        Schema::table('tab_players',function(Blueprint $table) {
            $table->dropColumn("start_from_beginning");
        });
    }
}
