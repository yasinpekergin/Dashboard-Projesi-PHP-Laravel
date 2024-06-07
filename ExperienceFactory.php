<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Experience>
 */
class ExperienceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->Jobtitle(),
            'company_name' => fake()->Company(),
            'department_name' => fake()->name(),
            'company_webside' => fake()->url(),
            'mission_name' => fake()->name(),
            'description' => fake()->sentence(20),
            'started_date' => fake()->date(),
            'expired_date' => fake()->date(),
            'is_active' => '0',
            'user_id' => '1',
        ];
    }
}
