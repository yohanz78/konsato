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
                'created_at'    => date('Y-m-d H:i:s', time()),
                'updated_at'    => date('Y-m-d H:i:s', time()),
            ],
            [
                'title'         => 'One Ok Rock Concert',
                'slug'          => 'one-ok-rock-concert',
                'price'         => 149,
                'updated_at'    => date('Y-m-d H:i:s', time()),
                'created_at'    => date('Y-m-d H:i:s', time()),
            ],
            [
                'title'         => 'Stray Kid Concert',
                'slug'          => 'stray-kid-concert',
                'price'         => 149,
                'updated_at'    => date('Y-m-d H:i:s', time()),
                'created_at'    => date('Y-m-d H:i:s', time()),
            ],
            [
                'title'         => 'LiSA Concert',
                'slug'          => 'lisa-concert',
                'price'         => 199,
                'updated_at'    => date('Y-m-d H:i:s', time()),
                'created_at'    => date('Y-m-d H:i:s', time()),
            ],
            [
                'title'         => 'Aimer Concert',
                'slug'          => 'aimer-concert',
                'price'         => 199,
                'updated_at'    => date('Y-m-d H:i:s', time()),
                'created_at'    => date('Y-m-d H:i:s', time()),
            ],
            [
                'title'         => 'Yoasobi Concert',
                'slug'          => 'yoasobi-concert',
                'price'         => 300,
                'updated_at'    => date('Y-m-d H:i:s', time()),
                'created_at'    => date('Y-m-d H:i:s', time()),
            ],
        ];

        Event::insert($event);
    }
}
