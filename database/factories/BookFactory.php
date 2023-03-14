<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\categorie;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
         $categories =categorie::pluck('id')->toArray();
        return [
            //
            'nameBook' => fake()->name(),
            'content' => Str::random(50),
            'image'=> Str::random(30),
            'category_id'=>fake()->randomElement($categories),
        ];
    }
}
