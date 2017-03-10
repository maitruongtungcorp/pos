<?php

use Illuminate\Database\Seeder;
use Webpatser\Uuid\Uuid;

class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mn_group')->insert([
            // Group system admin
            ['uuid' => Uuid::generate()->string, 'name' => 'SYSTEM_ADMIN', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            // Group client
            ['uuid' => Uuid::generate()->string, 'name' => 'CLIENT', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            // Group client
            ['uuid' => Uuid::generate()->string, 'name' => 'USER', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]
        ]);
    }
}
