<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tab_configs', function (Blueprint $table) {
            $table->increments('id');
            $table->string("key")->comment("La chiave di ricerca del valore.");
            $table->string("value")->comment("Il valore associato alla chiave.");
            $table->string("context")->default("")->comment("Il contesto che raggruppa le chiavi.");
            $table->boolean("editable")->default(true)->comment("Se il valore può essere modificato.");
            $table->unique(["key","context"]);
            $table->index(["context"]);
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
        Schema::drop('tab_configs');
    }
}
