<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'name',
    ];
    public function Tutors()
    {
        return $this->belongsToMany(Tutor::class, "SubjectTutor");
            
    }
        
    public function Books()
    {
        return $this->belongsToMany(Booking::class);
    }
}
