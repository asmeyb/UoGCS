<?php

use Illuminate\Database\Seeder;

class BloodGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\BloodGroup::create([
            'type' => 'A',
            'description' => 'Somethin In the Blood'
        ]);
    }
}
