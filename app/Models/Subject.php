<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'level',
    ];

    public function tutors(): BelongsToMany
    {
        return $this->belongsToMany(Tutor::class, 'subject_tutors');
    }

    // A subject can have many bookings
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
