<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUpdatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tab_updates', function (Blueprint $table) {

            $table->increments('id');
            $table->integer("player_id")->unsigned()->comment("Player a cui è associato l'aggiornamento.");
            $table->timestamps();
            //indici
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tab_updates');
    }
}
