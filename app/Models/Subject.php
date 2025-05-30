<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany ;

class Subject extends Model
{
    protected $fillable = [
        'name',
    ];
    public function tutors()
    {
        return $this->belongsToMany(Tutor::class, 'subject_tutor', 'subject_id', 'tutor_id');
    }

    // A subject can have many bookings
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
