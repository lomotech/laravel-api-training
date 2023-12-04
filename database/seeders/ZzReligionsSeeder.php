<?php

namespace Database\Seeders;

use App\Models\Zz\Religion;
use Illuminate\Database\Seeder;

class ZzReligionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            ['id' => 1, 'name' => 'Islam'],
            ['id' => 2, 'name' => 'Kristian'],
            ['id' => 3, 'name' => 'Buddha'],
            ['id' => 4, 'name' => 'Hindu'],
            ['id' => 5, 'name' => 'Sikhism'],
            ['id' => 6, 'name' => 'Tao'],
            ['id' => 7, 'name' => 'Konfusianisma'],
            ['id' => 8, 'name' => 'Bahai'],
            ['id' => 9, 'name' => 'Tiada Agama\/Aitismisme'],
            ['id' => 98, 'name' => 'Lain-lain Agama'],
            ['id' => 99, 'name' => 'Tiada Maklumat'],
        ];

        foreach ($items as $item) {
            Religion::firstOrCreate(
                [
                    'ddsa_code' => $item['id'],
                ],
                [
                    'name' => strtoupper($item['name']),
                ]
            );
        }
    }
}
