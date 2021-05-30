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
            'password' => Hash::make('12345678'),
            'tipo' => '1',
            'codigo' => 'admin',
        ]);

        $user1 = User::create([
            'name' => 'super admin',
            'email' => 'docent@gmail.com',
            'password' => Hash::make('12345678'),
            'tipo' => '2',
            'codigo' => 'docentes',
        ]);

        $user2 = User::create([
            'name' => 'Alumno',
            'email' => 'alum@gmail.com',
            'password' => Hash::make('12345678'),
            'tipo' => '3',
            'codigo' => 'alumnos',
        ]);
    }
}
