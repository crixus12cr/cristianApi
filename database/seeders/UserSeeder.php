<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Cristian Perdomo',
            'email' => 'cristian2020til@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        /* utilizando factories */
        User::factory(99)->create();
    }
}
