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
    public function definition(): array
    {
        return [
            'course_name' => fake()->words(3, true), 
            'course_index' => strtoupper(fake()->bothify('???###')), 
            'course_description' => fake()->paragraph(), 
            'faculty_id' => fake()->numberBetween(0,3)
        ];
    }
}