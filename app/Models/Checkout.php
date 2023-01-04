<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Checkout extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'event_id',
        'category',
        // 'is_paid',
    ];

    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class, 'event_id');
    }

    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
