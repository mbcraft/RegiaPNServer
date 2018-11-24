<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLastUpdateIdToPlayer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tab_players', function (Blueprint $table) {

            $table->integer("last_update_id")->unsigned()->nullable()->default(null)->comment("Id dell'ultimo aggiornamento.");
            $table->foreign("last_update_id")->references("id")->on("tab_updates");
            $table->boolean("update_downloaded")->default(false)->comment("Indica se l'aggiornamento è stato scaricato.");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tab_players', function (Blueprint $table) {

            $table->dropColumn("update_downloaded");
            $table->dropColumn("last_update_id");

        });
    }
}
