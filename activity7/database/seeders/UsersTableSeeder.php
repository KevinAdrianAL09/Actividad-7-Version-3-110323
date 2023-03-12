<?php

namespace Database\Seeders;


use Faker\Generator as Faker;
use App\Models\CursoName;
use App\Models\Kit;



use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Administrador
    User::create([
        'name' => 'Admon',
        'email' => 'admon@robotics.com',
        'password' => Hash::make('Adm@2022'),
        'role' => 'administrativo'
    ]);

    // Profesor
    User::create([
        'name' => 'Tecmilenio',
        'email' => 'tecmilenio@robotics.com',
        'password' => Hash::make('Adm@2022'),
        'role' => 'profesor'
    ]);

    // Estudiante
    User::create([
        'name' => 'Estudiante',
        'email' => 'student@robotics.com',
        'password' => Hash::make('Adm@2022'),
        'role' => 'estudiante'
    ]);




    }
}
