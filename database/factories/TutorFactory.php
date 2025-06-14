<?php

namespace Database\Factories;

use App\Models\Tutor;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class TutorFactory extends Factory
{
    protected $model = Tutor::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'gender' => $this->faker->randomElement(['male', 'female', 'other']),
            'date_of_birth' => $this->faker->date(),
            'address' => $this->faker->address(),
            'rating' => $this->faker->randomFloat(1, 1, 5),
            'total_reviews' => $this->faker->numberBetween(0, 100),
            'total_students' => $this->faker->numberBetween(0, 100),
            'city' => $this->faker->city(),
            'password' => Hash::make('password'),
            'qualification' => $this->faker->word(),
            'background_check_status' => $this->faker->randomElement(['pending', 'approved', 'rejected']),
            'hourly_rate' => $this->faker->randomFloat(2, 10, 100),
            'profile_picture' => $this->faker->imageUrl(),
            'phone_number' => $this->faker->phoneNumber(),
            'bio' => $this->faker->paragraph(),
            'availability' => $this->faker->sentence(),
        ];
    }
} 