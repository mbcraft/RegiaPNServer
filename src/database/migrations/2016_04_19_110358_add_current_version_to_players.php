<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCurrentVersionToPlayers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('tab_players', function (Blueprint $table) {

            $table->string("software_name")->default("RegiaPN Player");
            $table->string("software_version")->default("1.0.0");
            $table->string("software_vendor")->default("MBCRAFT");
                        
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

            $table->dropColumn("software_name");
            $table->dropColumn("software_version");
            $table->dropColumn("software_vendor");
                        
        });
    }
}
