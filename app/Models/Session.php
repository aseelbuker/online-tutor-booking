<?php




namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Session extends Model
{
    protected $fillable = [
        'booking_id',
        'start_time',
        'end_time',
        'meeting_link',
        'status',
        'notes',
    ];

    public function booking(): BelongsTo
    {
        return $this->belongsTo(Booking::class);
    }
}
