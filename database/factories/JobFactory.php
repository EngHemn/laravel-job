<?php

namespace Database\Factories;

use App\Models\Employe;
use App\Models\job;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<job>
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
        return [
            'title' => $this->faker->sentence(),
            'company' => $this->faker->company(),
            'salary' => $this->faker->numberBetween(1000, 10000),
            'date' => $this->faker->date(),
            'emp_id' => Employe::factory(),

        ];
    }
}
