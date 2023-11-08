<?php

use App\User;
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
        // Create User
        User::create([
            'name' => 'Julieta',
            'email' => 'jp@leofitness.in',
            'password' => bcrypt('password'),
            'status' => '1',
        ]);

        User::create([
            'name' => 'LeoFitness',
            'email' => 'propietario@leofitness.in',
            'password' => bcrypt('password'),
            'status' => '1',
        ]);

        User::create([
            'name' => 'Gerente',
            'email' => 'gerente@leofitness.in',
            'password' => bcrypt('password'),
            'status' => '1',
        ]);

        
    }
}
