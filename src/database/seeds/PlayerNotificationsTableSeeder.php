<?php

use Illuminate\Database\Seeder;

use App\Models\Player;

class PlayerNotificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $p1 = Player::findOrFail(1);
        
        DB::table("tab_player_notifications")->insert([
            'player_id' => $p1->id,
            'message' => 'The instance is running.',
            'type' => 'INSTANCE_STARTED'
        ]);
        
        DB::table("tab_player_notifications")->insert([
            'player_id' => $p1->id,
            'message' => 'The player has started.',
            'type' => 'SERVICE_STARTED'
            
        ]);
        
        DB::table("tab_player_notifications")->insert([
            'player_id' => $p1->id,
            'message' => 'The player has stopped.',
            'type' => 'SERVICE_STOPPED'
        ]);
        
        $p2 = Player::findOrFail(2);
        
        DB::table("tab_player_notifications")->insert([
            'player_id' => $p2->id,
            'message' => 'The instance is running.',
            'type' => 'INSTANCE_STARTED'
        ]);
        
        $p4 = Player::findOrFail(4);
        
        DB::table("tab_player_notifications")->insert([
            'player_id' => $p4->id,
            'message' => 'The update is being done.',
            'type' => 'UPDATE_STARTED'
        ]);
        
        DB::table("tab_player_notifications")->insert([
            'player_id' => $p4->id,
            'message' => 'The update has completed.',
            'type' => 'UPDATE_COMPLETED'
        ]);
        

    }
}
