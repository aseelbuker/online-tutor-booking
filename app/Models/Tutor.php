<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
