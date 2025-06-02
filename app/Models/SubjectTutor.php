<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubjectTutor extends Model
{
     protected $fillable = [
        'subject_id',
        'tutor_id',
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function tutor()
    {
        return $this->belongsTo(Tutor::class);
    }
}
