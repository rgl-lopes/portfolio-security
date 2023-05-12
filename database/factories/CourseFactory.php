<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'cu_code' => fake()->randomNumber(),
            'name' => 'course',
            'credits' => fake()->numberBetween(1, 10),
            'passed_at' => now(),
            'grade_id' => fake()->numberBetween(1, 50)
        ];
    }
}
