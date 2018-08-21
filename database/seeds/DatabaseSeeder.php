<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(InstitutionTableSeeder::class);
        $this->call(CampusesTableSeeder::class);
        $this->call(CountrysTableSeeder::class);
        $this->call(RegionsTableSeeder::class);
        $this->call(ZonesTableSeeder::class);
        $this->call(AdmittypesTableSeeder::class);
        $this->call(BloodGroupsTableSeeder::class);
        $this->call(AttendancesTableSeeder::class);
        $this->call(WeredasTableSeeder::class);
    }
}
