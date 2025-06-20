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

    protected $casts = [
        'scheduled_time' => 'datetime',
        'price' => 'decimal:2'
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
        return $this->hasOne(BookingSession::class);
    }

    // public function payment()
    // {
    //     return $this->hasOne(Payment::class);
    // }
}
