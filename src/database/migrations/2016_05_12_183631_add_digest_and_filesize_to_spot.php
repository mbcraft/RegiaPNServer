<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDigestAndFilesizeToSpot extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tab_spots', function (Blueprint $table) {

            $table->integer("protected_file_size")->nullable()->comment("Dimensione file crittato.");
            $table->string("protected_file_digest",64)->nullable()->comment("Digest file crittato.");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tab_spots', function (Blueprint $table) {

            $table->dropColumn("protected_file_size");
            $table->dropColumn("protected_file_digest");

        });
    }
}
