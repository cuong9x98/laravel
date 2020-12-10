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
            [
                'name'=>"Đỗ Quốc Cường",
                'username'=>"create",
                'password'=>bcrypt('admin123'),
                'email'=>"cuong9x91@gmail.com",
                'role_id'=>1,
                'status'=>1,
            ],
            [
                'name'=>"Đỗ Quốc Cường",
                'username'=>"edit",
                'password'=>bcrypt('admin123'),
                'email'=>"cuong9x92@gmail.com",
                'role_id'=>2,
                'status'=>1,
            ],
            [
                'name'=>"Đỗ Quốc Cường",
                'username'=>"sale",
                'password'=>bcrypt('admin123'),
                'email'=>"cuong9x93@gmail.com",
                'role_id'=>3,
                'status'=>1,
            ],
            [
                'name'=>"Đỗ Quốc Cường",
                'username'=>"inventory",
                'password'=>bcrypt('admin123'),
                'email'=>"cuong9x94@gmail.com",
                'role_id'=>4,
                'status'=>1,
            ],
            [
                'name'=>"Đỗ Quốc Cường",
                'username'=>"support",
                'password'=>bcrypt('admin123'),
                'email'=>"cuong9x95@gmail.com",
                'role_id'=>5,
                'status'=>1,
            ],
        	
        ];
        DB::table('users')->insert($data);
    }
}
