<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'Asia De Martino',
            'email' => 'asia_demartino@libero.it',
            'password' => Hash::make('ciao1234'),
        ]);
    }
}
