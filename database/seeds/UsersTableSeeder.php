<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'Asmamaw Yismaw',
            'email' => 'asmeyb@gmail.com',
            'password' => bcrypt('password')
        ]);
    }
}
