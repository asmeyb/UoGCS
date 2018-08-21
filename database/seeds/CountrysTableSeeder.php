<?php

use Illuminate\Database\Seeder;

class CountrysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Country::create([
            'name' => 'Ethiopia',
            'code' => 'ETH',
            'description' => 'Found in the East of Africa and the land of Origin'
        ]);
    }
}
