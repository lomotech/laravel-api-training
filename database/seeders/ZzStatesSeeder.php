<?php

namespace Database\Seeders;

use App\Models\Zz\State;
use Illuminate\Database\Seeder;

class ZzStatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            ['name' => 'JOHOR', 'name_long' => 'JOHOR DARUL TAKZIM', 'id' => '01', 'code2' => 'JH', 'code3' => 'JOH', 'capital' => 'JOHOR BAHRU'],
            ['name' => 'KEDAH', 'name_long' => 'KEDAH DARUL AMAN', 'id' => '02', 'code2' => 'KD', 'code3' => 'KED', 'capital' => 'ALOR SETAR'],
            ['name' => 'KELANTAN', 'name_long' => 'KELANTAN DARUL NAIM', 'id' => '03', 'code2' => 'KT', 'code3' => 'KEL', 'capital' => 'KOTA BAHRU'],
            ['name' => 'MELAKA', 'name_long' => 'MELAKA BANDARAYA BERSEJARAH', 'id' => '04', 'code2' => 'ML', 'code3' => 'MLK', 'capital' => 'BANDAR MELAKA'],
            ['name' => 'NEGERI SEMBILAN', 'name_long' => ' NEGERI SEMBILAN DARUL KHUSUS', 'id' => '05', 'code2' => 'NS', 'code3' => 'NSN', 'capital' => 'SEREMBAN'],
            ['name' => 'PAHANG', 'name_long' => 'PAHANG DARUL MAKMUR', 'id' => '06', 'code2' => 'PH', 'code3' => 'PAH', 'capital' => 'KUANTAN'], //kuala lipis until 1953
            ['name' => 'PULAU PINANG', 'name_long' => 'PULAU PINANG PULAU MUTIARA', 'id' => '07', 'code2' => 'PN', 'code3' => 'PEN', 'capital' => 'GEORGE TOWN'],
            ['name' => 'PERAK', 'name_long' => 'PERAK DARUL RIDZUAN', 'id' => '08', 'code2' => 'PR', 'code3' => 'PRK', 'capital' => 'IPOH'],
            ['name' => 'PERLIS', 'name_long' => 'PERLIS INDERA KAYANGAN', 'id' => '09', 'code2' => 'PL', 'code3' => 'PER', 'capital' => 'KANGAR'],
            ['name' => 'SELANGOR', 'name_long' => 'SELANGOR DARUL EHSAN', 'id' => '10', 'code2' => 'SG', 'code3' => 'SEL', 'capital' => 'SHAH ALAM'], //shah alam until 1978
            ['name' => 'TERENGGANU', 'name_long' => 'TERENGGANU DARUL IMAN', 'id' => '11', 'code2' => 'TR', 'code3' => 'TER', 'capital' => 'KUALA TERENGGANU'],
            ['name' => 'SABAH', 'name_long' => 'SABAH NEGERI DI BAWAH BAYU', 'id' => '12', 'code2' => 'SB', 'code3' => 'SBH', 'capital' => 'KOTA KINABALU'],
            ['name' => 'SARAWAK', 'name_long' => 'SARAWAK BUMI KENYALANG', 'id' => '13', 'code2' => 'SR', 'code3' => 'SWK', 'capital' => 'KUCHING'],
            ['name' => 'WP KUALA LUMPUR', 'name_long' => 'WILAYAH PERSEKUTUAN KUALA LUMPUR', 'id' => '14', 'code2' => 'KL', 'code3' => 'KUL', 'capital' => 'KUALA LUMPUR'],
            ['name' => 'WP LABUAN', 'name_long' => 'WILAYAH PERSEKUTUAN LABUAN', 'id' => '15', 'code2' => 'LB', 'code3' => 'LBU', 'capital' => 'LABUAN'],
            ['name' => 'WP PUTRAJAYA', 'name_long' => 'WILAYAH PERSEKUTUAN PUTRAJAYA', 'id' => '16', 'code2' => 'PJ', 'code3' => 'PTJ', 'capital' => 'PUTRAJAYA'],
//            ['name' => 'LUAR NEGARA', 'name_long' => 'LUAR NEGARA', 'id' => '98', 'code2' => 'LN', 'code3' => 'LNE', 'capital' => '-']
        ];

        foreach ($items as $item) {
            State::firstOrCreate(
                [
                    'ddsa_code' => $item['id'],
                ],
                [
                    'name' => $item['name'],
                ]
            );
        }
    }
}
