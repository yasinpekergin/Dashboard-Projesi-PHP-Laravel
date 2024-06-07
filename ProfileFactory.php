<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Gender;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company_name' => fake()->Company(),
            'user_id' => User::all()->random()->id,
            'gender_id' => Gender::all()->random()->id,
            'about' => fake()->sentence(10),
            'description' => fake()->sentence(20),
            'mobile_phone' => fake()->phoneNumber(11),
            'internal_phone' => fake()->phoneNumber(11),
            'second_email' => fake()->unique()->safeEmail(),
            'date_of_birth' => fake()->date()
        ];
    }
}
