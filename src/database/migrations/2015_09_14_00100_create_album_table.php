<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tab_album', function (Blueprint $table) {
                        
            $table->increments('id');
            $table->string("nome_album",255)->comment("Nome della cartella");
            $table->string("protected_album_name",100)->comment("Nome album crittato");
            $table->timestamps();

            $table->unique("nome_album");
            $table->unique("protected_album_name");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tab_album');
    }
}
