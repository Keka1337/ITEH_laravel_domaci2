<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Artist;
use App\Models\ArtPeriod;
use App\Models\Painting;
use App\Models\User;
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

        Artist::truncate();
        Painting::truncate();
        ArtPeriod::truncate();

        Painting::factory(5)->create();

    }
}
