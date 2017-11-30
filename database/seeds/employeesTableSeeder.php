<?php

use Illuminate\Database\Seeder;

class employeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            [
                'name' => 'Jon Oddur',
            	'location_id' => 1
            ],
            [
                'name' => 'Jon Bjarni',
            	'location_id' => 1
            ],
            [
                'name' => 'Birta',
            	'location_id' => 2
            ],
            [
                'name' => 'Bardur',
            	'location_id' => 2
            ],
            [
                'name' => 'Palli',
            	'location_id' => 3
            ]
        ]);
    }
}
