<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tab_spots', function (Blueprint $table) {
            $table->increments('id');
            $table->string("nome_spot",255)->comment("Nome del file dello spot, con estensione");
            $table->string("protected_spot_name",100)->comment("Nome file dello spot crittato, con estensione");
            
            $table->integer("player_id")->unsigned()->comment("Player a cui è associato questo spot");
            $table->foreign("player_id")->references("id")->on("tab_players")->onDelete("cascade");
            //playable fields
            $table->boolean("crypted")->default(false)->comment("Flag per indicare se è stata crittata");
            $table->enum("metadata_status",["NOT_FETCHED","NOT_FOUND","FOUND"])->default("NOT_FETCHED")->comment("Flag per indicare lo stato di fetch dei metadati");
            $table->string("title",64)->nullable();
            $table->string("artist",64)->nullable();
            $table->string("album",64)->nullable();
            $table->string("genre",64)->nullable();
            $table->string("track",16)->nullable();
            $table->string("date",16)->nullable();
            
            $table->string("bitrate",16)->nullable();
            $table->string("duration",16)->nullable();
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
        Schema::drop('tab_spots');
    }
}
