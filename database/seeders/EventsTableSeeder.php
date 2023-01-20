<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event; // memakai data model di event

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $event = [
            [
                'title'         => 'Dreamers Concert',
                'slug'          => 'dreamer-concert',
                'price'         => 100,
                'image'         => 'https://i.ytimg.com/vi/IwzkfMmNMpM/maxresdefault.jpg',
                'created_at'    => date('Y-m-d H:i:s', time()),
                'updated_at'    => date('Y-m-d H:i:s', time()),
            ],
            [
                'title'         => 'One Ok Rock Concert',
                'slug'          => 'one-ok-rock-concert',
                'price'         => 149,                
                'image'         => 'https://cdn0-production-images-kly.akamaized.net/07gu4BAAJBJKHDl_DqYgTyB8fS8=/1200x675/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3110/original/one-ok-rock-131028b.jpg',
                'updated_at'    => date('Y-m-d H:i:s', time()),
                'created_at'    => date('Y-m-d H:i:s', time()),
            ],
            [
                'title'         => 'Stray Kid Concert',
                'slug'          => 'stray-kid-concert',
                'price'         => 149,
                'image'         => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUdBZFZKtnY3w4_5yyo4j4Z8xYFRqffzoaug&usqp=CAU',
                'updated_at'    => date('Y-m-d H:i:s', time()),
                'created_at'    => date('Y-m-d H:i:s', time()),
            ],
            [
                'title'         => 'LiSA Concert',
                'slug'          => 'lisa-concert',
                'price'         => 199,
                'image'         => 'https://www.gwigwi.com/wp-content/uploads/2020/10/gwigwi.com-lisa-uru-bekerja-bersama-dalam-cm-untuk-earphone-peredam-bising-sony.jpg',
                'updated_at'    => date('Y-m-d H:i:s', time()),
                'created_at'    => date('Y-m-d H:i:s', time()),
            ],
            [
                'title'         => 'Aimer Concert',
                'slug'          => 'aimer-concert',
                'price'         => 199,
                'image'         => 'https://i.ytimg.com/vi/Opp9nqiN5m0/maxresdefault.jpg',
                'updated_at'    => date('Y-m-d H:i:s', time()),
                'created_at'    => date('Y-m-d H:i:s', time()),
            ],
            [
                'title'         => 'Yoasobi Concert',
                'slug'          => 'yoasobi-concert',
                'price'         => 300,
                'image'         => 'https://www.cultura.id/wp-content/uploads/2022/02/YOASOBI.jpg',
                'updated_at'    => date('Y-m-d H:i:s', time()),
                'created_at'    => date('Y-m-d H:i:s', time()),
            ],
        ];

        Event::insert($event);
    }
}
