<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        
            return [
            'name' => $this->faker->name(),
            'price' => $this->faker->numberBetween(1000000,2000000),
            'image' => $this->faker->text(),
            'description' => $this->faker->text(),
            'category' => $this->faker->numberBetween(1,10),
            ];
        
    }
}
