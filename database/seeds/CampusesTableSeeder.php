<?php

use Illuminate\Database\Seeder;

class CampusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Campus::create([
            'name' => 'Main Campus',
            'code' => 'Main',
            'description' => 'For Grade 9 and Above'
        ]);
    }
}
