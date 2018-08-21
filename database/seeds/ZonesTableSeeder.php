<?php

use Illuminate\Database\Seeder;

class ZonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Zone::create([            
            'region_id' => 1,
            'name' => 'North Gondar',
            'code' => 'NG',
            'description' => 'Found in the North of Amhara Region'
        ]);
    }
}
