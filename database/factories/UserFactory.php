<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use App\Models\Branch;
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
        $branchId = Branch::inRandomOrder()->first()->id;
        $gender = fake()->randomElement(['male', 'female']);
        $position = fake()->randomElement(['head office', 'trainer', 'staff hrd', 'staff multimedia', 'instructor', 'service advisor', 'supervisor', 'front counter/front desk', 'branch head', 'administration', 'staff accounting', 'foreman']);
        $department = fake()->randomElement(['Training Center', 'IT', 'Accounting', 'Administration', 'SA Office', 'Manager Office', 'Branch Office']);

        return [
            'username' => fake()->name(),
            'fullname' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'), // password
            'phone' => fake()->phoneNumber,
            'gender' => $gender,
            'branch_id' => $branchId,
            'department' => $department,
            'position' => $position,
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
