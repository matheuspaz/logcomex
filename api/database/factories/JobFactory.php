<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $priorityList = ['H', 'L', 'N'];

        $priority = $priorityList[array_rand($priorityList)];
        $description = fake()->jobTitle;
        $code = strtoupper(substr($description, 0, 3));
        $quantity = fake()->randomNumber(1, true);

        return [
            'priority' => $priority,
            'code' => $code,
            'description' => $description,
            'quantity' => $quantity,
        ];
    }
}
