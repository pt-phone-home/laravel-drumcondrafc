<?php

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
        App\User::create([
            'name' => 'Peter Tiernan',
            'email' => 'ptiernan@gmail.com',
            'password' => Hash::make('password')
        ]);
        App\User::create([
            'name' => 'Drums Admin',
            'email' => 'drumcondra_afc@gmail.com',
            'password' => Hash::make('Drums1924')
        ]);
    }
}
