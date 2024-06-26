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
            'first_name'        => 'John',
            'last_name'         => 'Doe',
            'type'              => 'admin',
            'phone'             => '888888888888',
            'password'          => '$2y$10$.ZxvcpvDXdiSPXGQLS4GMetbGLhp6CptlVhY9BDvkLW8hMcLF8afW',
            'remember_token'    => Str::random(10),
            'email_verified_at' => now(),
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
