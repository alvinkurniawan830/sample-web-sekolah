<?php

namespace Database\Seeders;

use App\Models\Carousel;
use App\Models\Guru;
use App\Models\Galeri;
use App\Models\Page;
use App\Models\Berita;
use App\Models\Sejarah;
use App\Models\Tentang;
use App\Models\visi;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            GuruSeeder::class,
            GaleriSeeder::class,
            PageSeeder::class,
            BeritaSeeder::class,
            CarouselSeeder::class,
            SejarahSeeder::class,
            TentangSeeder::class,
            VisiSeeder::class,
        ]);
    }
}
