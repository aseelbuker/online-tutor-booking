<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Review extends Model
{
    protected $fillable = [
        'student_id',
        'tutor_id',
        'rating',
        'comment',
        'hidden',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function tutor()
    {
        return $this->belongsTo(Tutor::class);
    }
}
