<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\CursoName;
use App\Models\Kit;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CursoName::factory()->count(100)->create();
    }
}
