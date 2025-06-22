<?php

namespace Database\Factories;

use App\Models\Booking;
use App\Models\Student;
use App\Models\Tutor;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookingFactory extends Factory
{
    protected $model = Booking::class;

    public function definition()
    {
        // Get existing student, tutor, and subject IDs
        $studentIds = Student::pluck('id')->toArray();
        $tutorIds = Tutor::pluck('id')->toArray();
        $subjectIds = Subject::pluck('id')->toArray();

        return [
            'student_id' => $this->faker->randomElement($studentIds),
            'tutor_id' => $this->faker->randomElement($tutorIds),
            'subject_id' => $this->faker->randomElement($subjectIds),
            'scheduled_time' => $this->faker->dateTimeBetween('+1 week', '+1 month'),
            'status' => $this->faker->randomElement(['scheduled', 'completed', 'cancelled']),
            'price' => $this->faker->randomFloat(2, 20, 100),
        ];
    }
} 