<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room
{
    public static function all(): array
    {
        return  [
            [
                'id' => 1,
                'name' => 'Rysy',
                'thumbnail' => 'assets/images/rooms/1.jpeg',
                'link' => '#',
                'persons' => '1 osoba',
                'bed' => '1x pojedyńcze',
                'surface'=>'30',
                'short_description'=>'lorem ipsum dolor sit amet',
                'description'=>' ALLEN GINSBERG’S SIMPLE WAY OF LIFE is the inspiration behind this first floor room of effortlessly uncomplicated beauty. Aptly located just beyond our library, an exposed hardwood-beam ceiling stretches to meet the towering cobalt blue bedhead, over a grey blue hexagonal terracotta tiled floor with hand-cut zellige border inlay.',
                'photos' => ['assets/images/rooms/1.jpeg','assets/images/rooms/2.jpeg','assets/images/rooms/3.jpeg','assets/images/rooms/4.jpeg','assets/images/rooms/5.jpeg']
            ],
            [
                'id' => 2,
                'name' => 'Giewnont',
                'thumbnail' => 'assets/images/rooms/2.jpeg',
                'link' => '#',
                'persons' => '2 osoby',
                'bed' => '1x podwójne',
                'surface'=>'35',
                'short_description'=>'lorem ipsum dolor sit amet',
                'description'=>' ALLEN GINSBERG’S SIMPLE WAY OF LIFE is the inspiration behind this first floor room of effortlessly uncomplicated beauty. Aptly located just beyond our library, an exposed hardwood-beam ceiling stretches to meet the towering cobalt blue bedhead, over a grey blue hexagonal terracotta tiled floor with hand-cut zellige border inlay.',
                'photos' => ['assets/images/rooms/1.jpeg','assets/images/rooms/2.jpeg','assets/images/rooms/3.jpeg','assets/images/rooms/4.jpeg','assets/images/rooms/5.jpeg']
            ],
            [
                'id' => 3,
                'name' => 'Kasprowy',
                'thumbnail' => 'assets/images/rooms/3.jpeg',
                'link' => '#',
                'persons' => '2 osoby',
                'bed' => '1x podwójne',
                'surface'=>'40',
                'short_description'=>'lorem ipsum dolor sit amet',
                'description'=>' ALLEN GINSBERG’S SIMPLE WAY OF LIFE is the inspiration behind this first floor room of effortlessly uncomplicated beauty. Aptly located just beyond our library, an exposed hardwood-beam ceiling stretches to meet the towering cobalt blue bedhead, over a grey blue hexagonal terracotta tiled floor with hand-cut zellige border inlay.',
                'photos' => ['assets/images/rooms/1.jpeg','assets/images/rooms/2.jpeg','assets/images/rooms/3.jpeg','assets/images/rooms/4.jpeg','assets/images/rooms/5.jpeg']
            ],
            [
                'id' => 4,
                'name' => 'Gerlach',
                'thumbnail' => 'assets/images/rooms/4.jpeg',
                'link' => '#',
                'persons' => '2 osoby',
                'bed' => '1x podwójne',
                'surface'=>'45',
                'short_description'=>'lorem ipsum dolor sit amet',
                'description'=>' ALLEN GINSBERG’S SIMPLE WAY OF LIFE is the inspiration behind this first floor room of effortlessly uncomplicated beauty. Aptly located just beyond our library, an exposed hardwood-beam ceiling stretches to meet the towering cobalt blue bedhead, over a grey blue hexagonal terracotta tiled floor with hand-cut zellige border inlay.',
                'photos' => ['assets/images/rooms/1.jpeg','assets/images/rooms/2.jpeg','assets/images/rooms/3.jpeg','assets/images/rooms/4.jpeg','assets/images/rooms/5.jpeg']
            ],
            [
                'id' => 5,
                'name' => 'Kościelec',
                'thumbnail' => 'assets/images/rooms/5.jpeg',
                'link' => '#',
                'persons' => '6 osób',
                'bed' => '2x podwójne 2x pojedyńcze',
                'surface'=>'75',
                'short_description'=>'lorem ipsum dolor sit amet',
                'description'=>' ALLEN GINSBERG’S SIMPLE WAY OF LIFE is the inspiration behind this first floor room of effortlessly uncomplicated beauty. Aptly located just beyond our library, an exposed hardwood-beam ceiling stretches to meet the towering cobalt blue bedhead, over a grey blue hexagonal terracotta tiled floor with hand-cut zellige border inlay.',
                'photos' => ['assets/images/rooms/1.jpeg','assets/images/rooms/2.jpeg','assets/images/rooms/3.jpeg','assets/images/rooms/4.jpeg','assets/images/rooms/5.jpeg']
            ],
        ];
    }
}
