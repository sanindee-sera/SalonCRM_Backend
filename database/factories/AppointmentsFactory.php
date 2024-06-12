<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appoinments>
 */
class AppointmentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id'=> $this->faker->unique()->randomNumber(),
            'name' => $this->faker->name(),
            'slug' => $this->faker->unique()->slug(),
            'description' => $this->faker->text(),
            'email' => $this->faker->unique()->safeEmail(),
            'date' => $this->faker->date(),
            'time' => $this->faker->time(),
            'status' => $this->faker->boolean,
        ];
    }
}
