<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventsDetail extends Model
{
    use HasFactory;

    // tambahan karena kalau gak ada ini, defaultnya kebaca tabel "events_details" dan akan gagal di migrate seednya
    // tabel yang seharusnya "events_detail"
    public $table = "events_detail"; 


    protected $fillable = [
        'ticket_id',
        'artist',
        'tanggal',
        'lokasi',
        'image',
    ];
}
