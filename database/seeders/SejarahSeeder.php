<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SejarahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sejarahs')->insert([
            'title' => 'Sejarah SMK Negeri 2 Karanganyar',
            'text'  => 'SMK N 2 Karanganyar berdiri sejak tahun 1997 di area tanah seluas 27.720 m­­2 dan diresmikan pada tanggal 18 November 1997 oleh Menteri Pendidikan Nasional yaitu Prof. Dr. Ing. Wardiman Djojonegeoro dengan satu program studi Teknik Mesin.Sekolah ini pertama kali dipimpin oleh Kepala Sekolah Drs. Surip Sunamto dari Tahun Pelajaran 1997/1998 hingga Tahun Pelajaran 2005/2006.',
            'image' => 'img/sejarah.jpg',
        ]);
    }
}
