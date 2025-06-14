<?php

namespace Database\Factories;

use App\Models\Report;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReportFactory extends Factory
{
    protected $model = Report::class;

    public function definition()
    {
        return [
            'reported_by' => User::factory(),
            'reportable_type' => 'App\\Models\\student',
            'reportable_id' => 1, // You may want to override this in tests
            'reason' => $this->faker->sentence(),
            'resolved' => $this->faker->boolean(),
        ];
    }
} 