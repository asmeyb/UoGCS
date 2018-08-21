<?php

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Region::create([
            'name' => 'Amhara',
            'code' => 'AMH',
            'description' => 'Found in the North West of Ethiopia',
            'country_id' => 1
        ]);
    }
}
