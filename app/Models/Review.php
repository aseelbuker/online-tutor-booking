<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Review extends Model
{
    use HasFactory;
    
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
