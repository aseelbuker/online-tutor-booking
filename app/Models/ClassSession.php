<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ClassSession extends Model
{
    protected $fillable = [
        'booking_id',
        'meeting_link',
        'status',
        'started_at',
        'ended_at'
    ];

    public function booking(): BelongsTo
    {
        return $this->belongsTo(Booking::class, 'booking_id', 'id');
    }
    
    
    // public function progressLogs(): HasMany
    // {
    //     return $this->hasMany(Progress::class);
    // }


}
