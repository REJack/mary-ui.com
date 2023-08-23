<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'city_id' => CityFactory::new(),
            'custom_key' => fake()->unique()->randomNumber(),
            'name' => fake()->unique()->firstName(),
            'username' => fake()->unique()->userName(),
            'avatar' => 'https://picsum.photos/200?='.now(),
            'email' => fake()->unique()->safeEmail(),
            'other_avatar' => 'https://picsum.photos/200?='.now(),
            'other_name' => fake()->unique()->firstName(),
            'other_email' => fake()->unique()->safeEmail(),
            'bio' => fake()->paragraph(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
