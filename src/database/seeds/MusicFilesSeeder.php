<?php

use Illuminate\Database\Seeder;

use Mbcraft\Piol\Dir;
use Mbcraft\Piol\File;

class MusicFilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fix_script1 = new File("resources/seed/script/prepare_for_delete.sh");
        exec(". ".$fix_script1->getPath());
        
        $d = new Dir("files/");
        $folders_to_delete = $d->listFolders();
        foreach ($folders_to_delete as $fld) {
            $fld->delete(true);
        }
        
        $target = new Dir("/");
        
        $c = new Dir("resources/seed/files/");
        $folders_to_copy = $c->listFolders();
        foreach ($folders_to_copy as $fld) {
            $fld->copy($d);
        }
                
        $fix_script2 = new File("resources/seed/script/fix_permissions.sh");
        exec(". ".$fix_script2->getPath());
    }
}
