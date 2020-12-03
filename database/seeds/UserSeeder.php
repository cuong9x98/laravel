<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          $data = [
        	[
        		'name'=>"Đỗ Quốc Cường",
	            'username'=>"admin",
	           	'password'=>bcrypt('admin123'),
	           	'email'=>"cuong9x98@gmail.com",
	           	'role_id'=>0,
	            'status'=>1,
        	],
        	
        ];
        DB::table('users')->insert($data);
    }
}
