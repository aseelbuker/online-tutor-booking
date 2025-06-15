<?php

namespace Database\Factories;

use App\Models\SubjectTutor;
use App\Models\Subject;
use App\Models\Tutor;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubjectTutorFactory extends Factory
{
    protected $model = SubjectTutor::class;

    public function definition()
    {
        return [
            'subject_id' => Subject::factory(),
            'tutor_id' => Tutor::factory(),
        ];
    }
} 