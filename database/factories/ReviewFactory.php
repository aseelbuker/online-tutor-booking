<?php

namespace Database\Factories;

use App\Models\Review;
use App\Models\student;
use App\Models\Tutor;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    protected $model = Review::class;

    public function definition()
    {
        return [
            'student_id' => student::factory(),
            'tutor_id' => Tutor::factory(),
            'rating' => $this->faker->numberBetween(1, 5),
            'comment' => $this->faker->sentence(),
            'hidden' => $this->faker->boolean(),
        ];
    }
} 