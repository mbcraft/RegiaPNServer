<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUpdateDownloadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tab_update_downloads', function (Blueprint $table) {

            $table->increments('id');
            $table->integer("update_id")->unsigned()->comment("Id dell'aggiornamento.");
            $table->string("ip",32)->comment("Indirizzo ip del client.");
            $table->string("user_agent")->comment("User agent di chi effettua il download.");
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
        Schema::drop('tab_update_downloads');
    }
}
