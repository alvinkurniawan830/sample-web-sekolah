<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TentangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tentangs')->insert([
            'title' => 'Tentang',
            'text'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae urna malesuada, pharetra augue quis, sodales mi. Ut laoreet vel metus id lacinia. Praesent vitae commodo urna, sed tristique enim. Fusce ullamcorper sollicitudin gravida. Nulla tristique suscipit facilisis. Praesent posuere, massa sed rutrum bibendum, libero nisi lacinia ante, et interdum nisi dui sed eros. Phasellus feugiat hendrerit ante et placerat. Fusce rhoncus blandit lectus porta tincidunt. Etiam eget massa gravida, euismod magna vitae, tincidunt ex. Morbi aliquam nunc at volutpat ullamcorper. Phasellus quis molestie ipsum.',
            'image' => 'img/Favicon.jpg',
        ]);
    }
}
