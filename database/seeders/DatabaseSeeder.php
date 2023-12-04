<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            // zz tables
            ZzStatesSeeder::class,
            ZzDistrictsSeeder::class,
            ZzSubDistrictsSeeder::class,
            ZzReligionsSeeder::class,
            ZzRacesSeeder::class,
            ZzOccupationStatusesSeeder::class,
            ZzEducationLevelsSeeder::class,
            ZzStatusesSeeder::class,

            UsersSeeder::class,
        ]);
    }
}
