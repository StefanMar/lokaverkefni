<?php

use Illuminate\Database\Seeder;

class locationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
            [
            	'name' => 'Keflavík',
            	'likes' => 0
        	],
        	[
            	'name' => 'Reykjavík',
            	'likes' => 0
        	],
        	[
            	'name' => 'Akureyri',
            	'likes' => 0
        	]
        ]);
    }
}
