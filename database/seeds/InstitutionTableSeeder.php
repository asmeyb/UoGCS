<?php

use Illuminate\Database\Seeder;

class InstitutionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Institution::create([
            'name'=>'UoGCS',
            'code' => 'UoGCS',
            'description'=>'UoG Community School'
        ]);
    }
}
