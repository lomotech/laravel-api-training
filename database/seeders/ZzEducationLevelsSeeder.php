<?php

namespace Database\Seeders;

use App\Models\Zz\EducationLevel;
use App\Models\Zz\Religion;
use Illuminate\Database\Seeder;

class ZzEducationLevelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [ 'id' => 10, 'name' => 'Tamat Darjah Enam Dan Kebawah' ],
            [ 'id' => 20, 'name' => 'PT3/ PMR/ SRP/ LCE/ III Thanawi/ Sijil yang Setaraf dan Diiktiraf oleh Kerajaan Malaysia' ],
            [ 'id' => 30, 'name' => 'SPM/ MCE/ SPMV/ IV Thanawi/ Sijil yang Setaraf dan Diiktiraf oleh Kerajaan Malaysia' ],
            [ 'id' => 40, 'name' => 'STP/ HSC/ STPM/ V Thanawi (STA/STAM)/ Sijil yang Setaraf dan Diiktiraf oleh Kerajaan Malaysia' ],
            [ 'id' => 60, 'name' => 'Sijil IPTA/ Politeknik/ Sijil yang Setaraf dan Diiktiraf oleh Kerajaan Malaysia' ],
            [ 'id' => 80, 'name' => 'Diploma IPTA/ Politeknik/ Diploma yang Setaraf dan Diiktiraf oleh Kerajaan Malaysia' ],
            [ 'id' => 91, 'name' => 'Ijazah Sarjana Muda (B.A.,B.Ec.,B.Sc., B.Ed.)/ Diploma Lanjutan yang Setaraf dan Diiktiraf oleh Kerajaan Malaysia' ],
            [ 'id' => 93, 'name' => 'Ijazah Sarjana (M.A,.M.Ec.,M.Ed.M.Sc.)' ],
            [ 'id' => 94, 'name' => 'Ijazah Kedoktoran (Ph. D./ Ed. D.)' ],
            [ 'id' => 99, 'name' => 'Lain-lain'],
        ];

        foreach ($items as $item) {
            EducationLevel::firstOrCreate(
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
