<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'student_id',
        'tutor_id',
        'subject_id',
        'scheduled_time',
        'status',
        "price"
    ];

    // Relations
    public function student() 
    {
        return $this->belongsTo(Student::class);
    }

    public function tutor()
    {
        return $this->belongsTo(Tutor::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function session()
    {
        return $this->hasOne(ClassSession::class);
    }
    public function review()
    {
        return $this->hasOne(Review::class);
    }

    // public function payment()
    // {
    //     return $this->hasOne(Payment::class);
    // }
}
