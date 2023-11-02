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
    }
}
