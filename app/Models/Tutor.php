<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tutor extends Model
{
    protected $fillable = [
        'name',
        'email',
        'password',
        'subject',
        'description',
        'photo',
        'status',
        'gender',
        'date_of_birth',
        'address',
        'rating',
        'total_reviews',
        'total_students',
        'city',
        'qualification',
        'background_check_status',
        'hourly_rate',
        'phone_number',
        'bio',
        'availability',
    ];

    protected $hidden = [
        'password',
    ];

    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }

    public function sessions(): HasMany
    {
        return $this->hasMany(BookingSession::class);
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }

    public function subjects(): BelongsToMany
    {
        return $this->belongsToMany(Subject::class, 'subject_tutors');
    }

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }

    // do the notifications and payments later
}
