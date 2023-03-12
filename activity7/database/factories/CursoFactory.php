<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


use Faker\Generator as Faker;
use App\Models\CursoName;
use App\Models\Kit;




/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CursoName>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */




     
    public function definition()
    {
        
        $factory->define(CursoName::class, function (Faker $faker) {
            $kit = Kit::inRandomOrder()->first();
        
            return [
                'course_key' => $faker->unique()->randomNumber(4),
                'course_name' => $faker->sentence(3),
                'course_cover' => $faker->imageUrl(),
                'course_content' => $faker->paragraph(),
                'kit_id' => $kit->id
            ];
        });
    }
}

