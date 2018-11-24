<?php

use Illuminate\Database\Seeder;

class ClientiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        DB::table('tab_clienti')->insert([
            'unique_label' => "capelli_paperopoli",
            'nome' => "Ernesta",
            'cognome' => "Faluffi",
            'ragione_sociale' => "I tuoi capelli",
            'indirizzo' => "Via tizio sempronio, 3",
            'cap' => "12345",
            'citta' => "Paperopoli",
            'provincia' => "Terra di mezzo",
            'stato' => 'IT',
            'p_iva' => "12341234123",
            'codice_fiscale' => "BVKFDOGFDFD4",
            'email' => 'unamail@proviamo.net',
            'sito_web' => 'http://www.unsitoacaso.com',
            'note' => "Una parrucchiera sempre pronta a servirti!",
            'security_token' => "dfs87yds8h8dsfh7ds",
            'owner_id' => 1,
            'manager_id' => 1
        ]);
        
        DB::table('tab_clienti')->insert([
            'unique_label' => "gommista_puffolandia",
            'ragione_sociale' => "Pneumatici 4 ever",
            'indirizzo' => "Via della gomma, 7",
            'cap' => "34341",
            'citta' => "Puffolandia",
            'provincia' => "Asgard",
            'stato' => 'IT',
            'p_iva' => "12121212454",
            'codice_fiscale' => "GFDKGFD5489FDGFD",
            'email' => 'pippo@plutopaperino.com',
            'telefono' => '+39 234 5749304',
            'sito_web' => 'http://www.provasito.it',
            'note' => "La tua auto è forata? Ci pensiamo noi!",
            'security_token' => "dfs87fds87f9ds89ds",
            'owner_id' => 2,
            'manager_id' => 2
        ]);
        
    }
}
