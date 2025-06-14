<?php

namespace Database\Factories;

use App\Models\Session;
use App\Models\Booking;
use App\Models\BookingSession;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookingSessionFactory extends Factory
{
    protected $model = BookingSession::class;

    public function definition()
    {
        return [
            'booking_id' => Booking::factory(),
            'start_time' => $this->faker->dateTimeBetween('+1 days', '+1 month'),
            'end_time' => $this->faker->dateTimeBetween('+1 days', '+2 months'),
            'meeting_link' => $this->faker->url(),
            'status' => $this->faker->randomElement(['scheduled', 'completed', 'canceled']),
            'notes' => $this->faker->sentence(),
        ];
    }
} 