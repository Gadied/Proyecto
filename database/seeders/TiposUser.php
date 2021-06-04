<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class TiposUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $userAdmin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'username' => 'admin',
            'password' => Hash::make('12345678'),
            'tipo' => '1',
        ]);

        $user1 = User::create([
            'name' => 'Docente',
            'email' => 'docent@gmail.com',
            'username' => 'docent',
            'password' => Hash::make('12345678'),
            'tipo' => '2',
        ]);

        $user2 = User::create([
            'name' => 'Alumno',
            'email' => 'alum@gmail.com',
            'username' => 'alum',
            'password' => Hash::make('12345678'),
            'tipo' => '3',
        ]);
    }
}
