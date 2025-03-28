<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'       => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(),
            'date'        => $this->faker->dateTimeBetween('-30 days', '+30 days')->format('Y-m-d'),
            'time'        => $this->faker->optional()->time('H:i'),
            'location'    => $this->faker->optional()->city(),
            'created_at'  => now(),
            'updated_at'  => now(),
        ];
    }
}
