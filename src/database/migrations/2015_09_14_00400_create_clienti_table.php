<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tab_clienti', function (Blueprint $table) {
            $table->increments('id');
            $table->string("unique_label",64)->comment("Label stringa utilizzata nelle cartelle in upload.");
            
            $table->integer("owner_id")->unsigned()->comment("Utente proprietario del cliente.");
            $table->foreign('owner_id')->references('id')->on('SENTINEL_users')->onDelete('cascade');
            
            $table->integer("manager_id")->unsigned()->comment("Utente che gestisce il cliente.");
            $table->foreign('manager_id')->references('id')->on('SENTINEL_users'); 
            
            $table->string("nome",64)->nullable();
            $table->string("cognome",64)->nullable();
            $table->string("ragione_sociale",255)->nullable();
            $table->string("indirizzo",255);
            $table->string("cap",8);
            $table->string("citta",64);
            $table->string("provincia",64);
            $table->string("stato",2)->comment("Codice di 2 lettere che rappresenta lo stato.");
            $table->string("p_iva",16)->nullable();
            $table->string("codice_fiscale",16)->nullable();
            $table->string("telefono",16)->nullable();
            $table->string("email",32)->nullable();
            $table->string("sito_web",32)->nullable();
            $table->text("note")->nullable();
            $table->string("security_token",64)->comment("Security token del cliente.");
            
            $table->softDeletes();
            $table->timestamps();
            
            $table->unique("unique_label");
            $table->unique("security_token");           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tab_clienti');
    }
}
