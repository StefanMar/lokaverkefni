<?php

use Illuminate\Database\Seeder;

class extrasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('extras')->insert([
            [
                'name' => 'GPS',
            	'cost' => 1000
            ],
            [
                'name' => 'Mobile WiFi',
            	'cost' => 1500
            ],
            [
                'name' => 'Trygging',
            	'cost' => 2000
            ]
        ]);
    }
}
