<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EventsDetail; // memakai data model di event detail


class EventsDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $eventsDetail = [
            [
                'event_id'  => 1,
                'artist'    => 'Jung Kook',
                'tanggal'   => '2023-01-01',
                'lokasi'    => 'Pekan Raya Jakarta',
            ],
            [
                'event_id'  => 2,
                'artist'    => 'Takahiro Moriuchi',
                'tanggal'   => '2023-01-05',
                'lokasi'    => 'Pekan Raya Jakarta',
            ],
            [
                'event_id'  => 3,
                'artist'    => 'Stray Kids',
                'tanggal'   => '2023-01-05',
                'lokasi'    => 'Pekan Raya Jakarta',
            ],
            [
                'event_id'  => 4,
                'artist'    => 'LiSA x Uru',
                'tanggal'   => '2023-01-25',
                'lokasi'    => 'PIK',
            ],
            [
                'event_id'  => 5,
                'artist'    => 'Aimer',
                'tanggal'   => '2023-01-25',
                'lokasi'    => 'PIK',
            ],
            [
                'event_id'  => 6,
                'artist'    => 'Ayase x Lilas Ikuta',
                'tanggal'   => '2023-01-25',
                'lokasi'    => 'PIK',
            ],
        ];
        
        EventsDetail::insert($eventsDetail);
    }
}
