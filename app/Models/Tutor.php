<?php

namespace App\Models;
use App\Models\Tutor;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tutor extends Model
{
    protected $fillable = [
        'name',
        'email',
        'gender',
        'date_of_birth',
        'address',
        'rating',
        'total_reviews',
        'total_students',
        'city',
        'password',
        'qualification',
        'background_check_status',
        'hourly_rate',
        'profile_picture',
        'phone_number',
        'bio',
        'availability',
        
    ];

    public function student():HasMany
    {
        return $this->hasMany(Student::class);
    }
    public function sessions(): HasMany
    {
        return $this->hasMany(ClassSession::class);
    }
    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }
    public function subjects(): HasMany
    {
        return $this->hasMany(Subject::class);
    }
    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }

    // do the notifications and payments later
     
}
