<?php

use Illuminate\Database\Seeder;

class carsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
            [
                'type' => 'Kia Rio',
            	'year' => 2007,
            	'cost' => 15000
            ],
            [
                'type' => 'Suzuki Swift',
            	'year' => 2003,
            	'cost' => 20000
            ],
            [
                'type' => 'Skoda Octavia',
            	'year' => 2010,
            	'cost' => 30000
            ],
            [
                'type' => 'Hyundai i10',
            	'year' => 2016,
            	'cost' => 20000
            ]
        ]);
    }
}
