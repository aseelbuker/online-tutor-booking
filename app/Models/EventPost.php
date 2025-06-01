<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventPost extends Model
{
    protected $fillable = [
        'title',
        'description',
        'banner_url',
        'event_date',
        'price',
        'link',
        'visible',
    ];
}
