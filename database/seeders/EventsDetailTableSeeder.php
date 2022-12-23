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
                'ticket_id' => 1,
                'artist'    => 'Jung Kook',
                'tanggal'   => '2023-01-01',
                'lokasi'    => 'Pekan Raya Jakarta',
                'image'     => 'https://i.ytimg.com/vi/IwzkfMmNMpM/maxresdefault.jpg',
            ],
            [
                'ticket_id' => 2,
                'artist'    => 'Takahiro Moriuchi',
                'tanggal'   => '2023-01-05',
                'lokasi'    => 'Pekan Raya Jakarta',
                'image'     => 'https://cdn0-production-images-kly.akamaized.net/07gu4BAAJBJKHDl_DqYgTyB8fS8=/1200x675/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3110/original/one-ok-rock-131028b.jpg',
            ],
            [
                'ticket_id' => 3,
                'artist'    => 'Stray Kids',
                'tanggal'   => '2023-01-05',
                'lokasi'    => 'Pekan Raya Jakarta',
                'image'     => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUdBZFZKtnY3w4_5yyo4j4Z8xYFRqffzoaug&usqp=CAU',
            ],
            [
                'ticket_id' => 4,
                'artist'    => 'LiSA x Uru',
                'tanggal'   => '2023-01-25',
                'lokasi'    => 'PIK',
                'image'     => 'https://www.gwigwi.com/wp-content/uploads/2020/10/gwigwi.com-lisa-uru-bekerja-bersama-dalam-cm-untuk-earphone-peredam-bising-sony.jpg',
            ],
            [
                'ticket_id' => 5,
                'artist'    => 'Aimer',
                'tanggal'   => '2023-01-25',
                'lokasi'    => 'PIK',
                'image'     => 'https://i.ytimg.com/vi/Opp9nqiN5m0/maxresdefault.jpg',
            ],
            [
                'ticket_id' => 6,
                'artist'    => 'Ayase x Lilas Ikuta',
                'tanggal'   => '2023-01-25',
                'lokasi'    => 'PIK',
                'image'     => 'https://www.cultura.id/wp-content/uploads/2022/02/YOASOBI.jpg',
            ],
        ];
        
        EventsDetail::insert($eventsDetail);
    }
}
