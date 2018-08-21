<?php

use Illuminate\Database\Seeder;

class AdmittypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Admittype::create([
            'name' => 'Regular'
        ]);
    }
}
