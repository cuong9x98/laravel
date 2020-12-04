<?php

use Illuminate\Database\Seeder;

class ProductlineSeeder extends Seeder
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
        		'name'=>"Dell latitude",
        		'brand_id'=>1,
        	],
        	[
        		'name'=>"Hp Probook",
        		'brand_id'=>2,
        	],
            [
                'name'=>"Lenovo Thinkpad",
                'brand_id'=>3,
            ],
        	
        ];
        DB::table('productlines')->insert($data);
    }
}
