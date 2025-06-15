<?php

namespace Database\Factories;

use App\Models\EventPost;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventPostFactory extends Factory
{
    protected $model = EventPost::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(),
            'banner_url' => $this->faker->imageUrl(),
            'event_date' => $this->faker->dateTimeBetween('+1 days', '+1 year'),
            'price' => $this->faker->randomFloat(2, 0, 500),
            'link' => $this->faker->url(),
            'visible' => $this->faker->boolean(),
        ];
    }
} 