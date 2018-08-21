<?php

use Illuminate\Database\Seeder;

class AttendancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Attendance::create([
            'type'=> 'Present',
            'description' => 'Attending the class physically'
        ]);
    }
}
