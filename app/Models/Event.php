<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Checkout;
use Auth;

class Event extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'events';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'title',
        'price',
        'image',
    ];

    // protected $table = 'ms_admin';

    /**
     * Get all of the comments for the Event
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function eventsdetail()
    {
        return $this->hasMany(EventsDetail::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getIsRegisteredAttribute()
    {
        if (!Auth::check()) {
            return false;
        }
        return Checkout::whereEventId($this->id)->whereUserId(Auth::id())->exists(); 
    }
}