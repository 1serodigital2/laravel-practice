<?php

namespace Database\Factories;

use App\Models\category;
use App\Models\nightstay;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Package>
 */
class PackageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categoryIds = category::pluck('id')->toArray();
        $nightstayIds = nightstay::pluck('id')->toArray();

        return [
            'name' => $this->faker->sentence(3),
            'days' => $this->faker->numberBetween(1, 14),
            'description' => $this->faker->paragraph,
            'category_id' => $this->faker->randomElement($categoryIds),
            'nightstay_id' => $this->faker->randomElement($nightstayIds),
            // 'price' => $this->faker->randomFloat(2, 100, 5000),
            // 'location' => $this->faker->city,
            'created_at' => now(),
            // 'updated_at' => now(),
        ];
    }
}
