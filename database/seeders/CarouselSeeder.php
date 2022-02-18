<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carousel = [
            [
                'image' =>'sample-image/Carousel1.jpg',
                'title' =>'SMKN 2 KARANGANYAR',
                'text'  =>'Mewujudkan pelajar yang berprestasi, berpendidikan karakter, memiliki sopan santun, dan lulusan siap kerja.',
            ],
            [
                'image' =>'sample-image/Carousel2.jpg',
                'title' =>'SMKN 2 KARANGANYAR',
                'text'  =>'Mewujudkan pelajar yang berprestasi, berpendidikan karakter, memiliki sopan santun, dan lulusan siap kerja.',
            ],
            [
                'image' =>'sample-image/Carousel3.jpg',
                'title' =>'SMKN 2 KARANGANYAR',
                'text'  =>'Mewujudkan pelajar yang berprestasi, berpendidikan karakter, memiliki sopan santun, dan lulusan siap kerja.',
            ],
        ];
        DB::table('carousels')->insert($carousel);
    }
}
