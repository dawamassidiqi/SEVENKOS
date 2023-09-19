<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\kos>
 */
class kosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'namaKos' => $this->faker->userName(),
            'alamatKos' => $this->faker->address(),
            'hargaPerbulan' => $this->faker->longitude($min = 1, $max = 100),
            'fasilitasKos' => $this->faker->citySuffix() 
        ];
    }
}
