<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventsDetail extends Model
{
    use HasFactory;

    // tambahan karena kalau gak ada ini, defaultnya kebaca tabel "events_details" dan akan gagal di migrate seednya
    // tabel yang seharusnya "events_detail"
    protected $table = "events_detail";
    protected $primaryKey = 'id';

    protected $fillable = [
        'event_id',
        'artist',
        'tanggal',
        'lokasi',
        'image',
    ];

    /**
     * Get the user that owns the EventsDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }
}
