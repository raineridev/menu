<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Dishe;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dishe>
 */
class DisheFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Dishe::class;
    
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'description' => fake()->sentence(),
            'price' => fake()->randomFloat(2, 1, 300)
        ];
    }
}


