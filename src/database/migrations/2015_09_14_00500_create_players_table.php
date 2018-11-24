<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tab_players', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer("cliente_id")->unsigned()->comment("Cliente a cui è associato il player.");
            $table->foreign("cliente_id")->references("id")->on("tab_clienti")->onDelete("cascade");
            $table->string("unique_label",64)->comment("Label stringa utilizzata nelle cartelle in upload.");
            $table->enum("status",["UNREGISTERED","REGISTERED","ACTIVE","LIMITED","BLOCKED","DELETED"])->default("UNREGISTERED");
            $table->string("registration_code",16)->comment("Codice di registrazione per il player.");
            $table->string("security_token",64)->comment("Security token del player.");
            $table->string("api_password",64)->comment("Password non hashed per l'utilizzo di API.");
            
            //informazioni sulla posizione
            $table->string("indirizzo");
            $table->string("cap",8);
            $table->string("citta",32);
            $table->string("provincia",32);
            $table->string("stato",2);
            
            //altre configurazioni                    
            $table->string("time_zone",32)->default("Europe/Rome")->comment("Time zone del player.");
            $table->string("play_start_time",8)->comment("Ora e minuti dell'inizio del play.");
            $table->string("play_end_time",8)->comment("Ora e minuti del fine del play.");
            $table->smallInteger("play_end_time_day_offset")->unsigned()->comment("Offset in giorni del tempo di fine play.");
            $table->smallInteger("check_play_minutes_interval")->unsigned()->default(2)->comment("Tempo di sleep del thread che controlla il player.");
            $table->string("files_update_time",8)->comment("Ora e minuti dell'aggiornamento files.");
            $table->boolean("loop_playlist")->default(true)->comment("Ripeti playlist se ancora in orario da musica.");
            
            //altri campi
            $table->softDeletes();
            $table->timestamps();
            //indici
            $table->index("cliente_id");
            //$table->unique(["cliente_id","unique_label"]);
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
        Schema::drop('tab_players');
    }
}
