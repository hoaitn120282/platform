<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	[
	            'name' => 'Henry Tran',
	            'email' => 'henry.tran@qsoft.com.vn',
	            'is_admin' => true,
	            'password' => bcrypt('Admin@123456!'),
                'description' => 'Administrator',
                'photo' => "default-user.png"
            ]
        ]);
    }
}
