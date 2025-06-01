<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
        'reported_by', 'reportable_type', 'reportable_id', 'reason', 'resolved'
    ];

    public function reporter()
    {
        return $this->belongsTo(User::class, 'reported_by');
    }

    // public function reportable()
    // {
    //     return $this->morphTo();
    // }
}
