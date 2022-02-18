<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class VisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('visis')->insert([
            'title' =>'Tentang',
            'visi'  =>'Berkarakter,berprestasi dan berbudaya lingkungan',
            'misi'  =>'Menanamkan Keimanan dan Ketakwaan kepada Tuhan Yang Maha Esa,Menyelenggarakan Pendidikan dan Pelatihan yang Berkualitas dan Berbudaya Lingkungan',
        ]);
    }

}
