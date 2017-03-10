<?php

use Illuminate\Database\Seeder;
use Webpatser\Uuid\Uuid;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Get company system admin
        $companySystemAdmin = DB::table('mn_companies')->where('code', 'MAINGUYENCORP')->first();

        // Get group system admin
        $groupSystemAdmin = DB::table('mn_group')->where('name', 'SYSTEM_ADMIN')->first();

    	// User system admin
    	DB::table('mn_users')->insert([
    		'uuid'			=> Uuid::generate()->string,
            'company_id'    => $companySystemAdmin->uuid,
            'name'          => 'System Admin',
            'email'         => 'maitruongtung@gmail.com',
            'password'      => bcrypt('Aa,123456'),
            'type'          => 'SYSTEM',
            'status'        => 'ACTIVE',
            'group_id'      => $groupSystemAdmin->uuid,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
