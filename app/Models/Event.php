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

    protected $fillable = [
        'title',
        'price',
    ];

    // protected $table = 'ms_admin';
    protected $primaryKey = 'id';

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