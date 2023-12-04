<?php

namespace Database\Seeders;

use App\Models\Zz\OccupationStatus;
use App\Models\Zz\Religion;
use Illuminate\Database\Seeder;

class ZzOccupationStatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            ['id' => 1, 'name' => 'Penjawat Awam'],
            ['id' => 2, 'name' => 'Pekerja Swasta'],
            ['id' => 3, 'name' => 'Bekerja Sendiri'],
            ['id' => 4, 'name' => 'Pelajar'],
            ['id' => 6, 'name' => 'Suri Rumah'],
            ['id' => 7, 'name' => 'Pesara'],
            ['id' => 8, 'name' => 'Penganggur / Tidak Bekerja'],
            ['id' => 9, 'name' => 'Lain-lain'],
        ];

        foreach ($items as $item) {
            OccupationStatus::firstOrCreate(
                [
                    'name' => $item['name'],
                ]
            );
        }
    }
}
