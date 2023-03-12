<?php

namespace Database\Seeders;


use Faker\Generator as Faker;
use App\Models\CursoName;




use App\Models\Kit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Kit::create([
            'name' => 'StarterKit',
            'description' => 'Kit de robótica para principiantes.'
        ]);
    
        Kit::create([
            'name' => 'Educational Robotics Kit',
            'description' => 'Kit de robótica educativa.'
        ]);
    
        Kit::create([
            'name' => 'Kit5',
            'description' => 'Kit avanzado de robótica.'
        ]);




    }
}
