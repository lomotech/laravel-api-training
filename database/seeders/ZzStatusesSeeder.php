<?php

namespace Database\Seeders;

use App\Models\Zz\Status;
use Illuminate\Database\Seeder;

class ZzStatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            ['name' => 'Baharu'],
            ['name' => 'Diluluskan'],
            ['name' => 'Ditolak'],
        ];

        foreach ($items as $item) {
            Status::firstOrCreate(
                [
                    'name' => $item['name'],
                ]
            );
        }
    }
}
