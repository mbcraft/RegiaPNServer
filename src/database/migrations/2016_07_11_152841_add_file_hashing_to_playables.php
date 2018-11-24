<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFileHashingToPlayables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('tab_canzoni', function (Blueprint $table) {
            $table->integer("file_size")->nullable()->comment("Dimensione file.");
            $table->string("file_digest",64)->nullable()->comment("Digest file.");
        });

        Schema::table('tab_spots', function (Blueprint $table) {
            $table->integer("file_size")->nullable()->comment("Dimensione file.");
            $table->string("file_digest",64)->nullable()->comment("Digest file.");
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
        Schema::table('tab_canzoni', function (Blueprint $table) {
            $table->dropColumn("file_size");
            $table->dropColumn("file_digest");
        });

        Schema::table('tab_spots', function (Blueprint $table) {
            $table->dropColumn("file_size");
            $table->dropColumn("file_digest");
        });
    }
}
