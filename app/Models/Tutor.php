<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    protected $fillable = [
        'name',
        'email',
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
