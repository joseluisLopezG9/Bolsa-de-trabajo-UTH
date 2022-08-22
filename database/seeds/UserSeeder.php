<?php

use App\User;
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

        'name' => 'José Luis López',
        'email' => 'luis@gmail.com',
        'password' => bcrypt('luisillo')
        ])->assignRole('Administrador');
    
        User::create([

        'name' => 'Marco Antonio Ramírez',
        'email' => 'marco@gmail.com',
        'password' => bcrypt('realmadrid10')
        ])->assignRole('Observador');
    
    }

}
