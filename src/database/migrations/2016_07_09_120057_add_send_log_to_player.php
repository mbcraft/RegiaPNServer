<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSendLogToPlayer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tab_players', function (Blueprint $table) {
            $table->boolean("send_log_to_server")->default(false)->comment("Invia log al server");
            $table->enum("log_level",["DEFAULT","DEBUG","INFO","WARNING","ERROR","FATAL"])->default("DEFAULT")->comment("Livello di log da utilizzare");
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
            $table->dropColumn("send_log_to_server");
            $table->dropColumn("log_level");
        });
    }
}
