<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $email = fake()->unique()->safeEmail();

        return [
            'name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'role' => fake()->randomElement(['Chauffeur', 'Passager', 'Administrateur']),
            'email' => $email,
            'email_verified_at' => now(),
            'password' => Hash::make($email),
            'statut' => 'normal',
            'photo' => fake()->imageUrl(200, 200, 'people', true, 'profile'),
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
