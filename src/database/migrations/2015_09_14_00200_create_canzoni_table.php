<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCanzoniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tab_canzoni', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("album_id")->unsigned()->comment("Chiave esterna album");
            $table->foreign("album_id")->references('id')->on('tab_album')->onDelete('cascade');
            //nome canzone
            $table->string("nome_canzone",255)->comment("Nome del file con estensione");
            $table->string("protected_song_name",100)->comment("Nome del file crittato, con estensione");
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
        Schema::drop('tab_canzoni');
    }
}
