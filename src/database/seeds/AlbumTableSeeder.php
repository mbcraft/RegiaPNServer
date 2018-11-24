<?php

use Illuminate\Database\Seeder;

class AlbumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        DB::table('tab_album')->insert([
            'nome_album' => "Enya - Amarantine",
            'protected_album_name' => "Enya___Amarantine"
        ]);
        
    }
}
