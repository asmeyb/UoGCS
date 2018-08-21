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
            'name' => 'Gondar',
            'code' => 'NG',
            'zone_id' => 1,
            'description' => 'Found in the North of Amhara Region'
        ]);
    }
}
