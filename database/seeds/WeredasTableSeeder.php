<?php

use Illuminate\Database\Seeder;

class WeredasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Wereda::create([
            'country_id' => 1,
            'region_id' => 1,
            'name' => 'Gondar',
            'code' => 'NG',
            'zone' => 'North Gondar',
            'description' => 'Found in the North of Amhara Region'
        ]);
    }
}
