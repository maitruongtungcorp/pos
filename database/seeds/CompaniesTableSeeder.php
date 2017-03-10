<?php

use Illuminate\Database\Seeder;
use Webpatser\Uuid\Uuid;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Company system admin
    	DB::table('mn_companies')->insert([
            'uuid'  => Uuid::generate()->string,
    		'code'	=> 'MAINGUYENCORP',
            'name'	=> 'Mai Nguyen CORP',
            'email' => 'info@mainguyencorp.com',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
