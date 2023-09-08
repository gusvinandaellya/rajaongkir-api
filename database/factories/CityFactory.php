<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\City>
 */
class CityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'city_id' => $this->faker->unique()->randomNumber(),
            'province_id' => $this->faker->numberBetween(1, 34),
            'province' => $this->faker->state,
            'type' => $this->faker->randomElement(['Kabupaten', 'Kota']),
            'city_name' => $this->faker->city,
            'postal_code' => $this->faker->postcode,
        ];
    }
}
