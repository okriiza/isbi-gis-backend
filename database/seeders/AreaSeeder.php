<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $areas = [
            [
                'kode' => '3201',
                'name' => 'Kabupaten Bogor',
                'lat' => '-6.551776',
                'long' => '106.629128',
            ],
            [
                'kode' => '3202',
                'name' => 'Kabupaten Sukabumi',
                'lat' => '-6.864924',
                'long' => '106.953568',
            ],
            [
                'kode' => '3203',
                'name' => 'Kabupaten Cianjur',
                'lat' => '-6.811810',
                'long' => '107.145409',
            ],
            [
                'kode' => '3204',
                'name' => 'Kabupaten Bandung',
                'lat' => '-7.134070',
                'long' => '107.621529',
            ],
            [
                'kode' => '3205',
                'name' => 'Kabupaten Garut',
                'lat' => '-7.248400',
                'long' => '107.909653',
            ],
            [
                'kode' => '3206',
                'name' => 'Kabupaten Tasikmalaya',
                'lat' => '-7.325900',
                'long' => '108.220932',
            ],
            [
                'kode' => '3207',
                'name' => 'Kabupaten Ciamis',
                'lat' => '-7.326510',
                'long' => '108.357063',
            ],
            [
                'kode' => '3208',
                'name' => 'Kabupaten Kuningan',
                'lat' => '-6.980870',
                'long' => '108.477570',
            ],
            [
                'kode' => '3209',
                'name' => 'Kabupaten Cirebon',
                'lat' => '-6.711210',
                'long' => '108.559242',
            ],
            [
                'kode' => '3210',
                'name' => 'Kabupaten Majalengka',
                'lat' => '-6.834010',
                'long' => '108.227631',
            ],
            [
                'kode' => '3211',
                'name' => 'Kabupaten Sumedang',
                'lat' => '-6.850370',
                'long' => '107.922394',
            ],
            [
                'kode' => '3212',
                'name' => 'Kabupaten Indramayu',
                'lat' => '-6.472450',
                'long' => '108.294853',
            ],
            [
                'kode' => '3213',
                'name' => 'Kabupaten Subang',
                'lat' => '3.081600',
                'long' => '101.585430',
            ],
            [
                'kode' => '3214',
                'name' => 'Kabupaten Purwakarta',
                'lat' => '-6.561390',
                'long' => '107.443810',
            ],
            [
                'kode' => '3215',
                'name' => 'Kabupaten Karawang',
                'lat' => '-6.296900',
                'long' => '107.293762',
            ],
            [
                'kode' => '3216',
                'name' => 'Kabupaten Bekasi',
                'lat' => '-6.243310',
                'long' => '106.993721',
            ],
            [
                'kode' => '3217',
                'name' => 'Kabupaten Bandung Barat',
                'lat' => '-6.902160',
                'long' => '107.619110',
            ],
            [
                'kode' => '3218',
                'name' => 'Kabupaten Pangandaran',
                'lat' => '-7.684350',
                'long' => '108.659538',
            ],
            [
                'kode' => '3271',
                'name' => 'Kota Bogor',
                'lat' => '-6.622620',
                'long' => '106.777191',
            ],
            [
                'kode' => '3272',
                'name' => 'Kota Sukabumi',
                'lat' => '-6.920740',
                'long' => '106.931020',
            ],
            [
                'kode' => '3273',
                'name' => 'Kota Bandung',
                'lat' => '-6.917464',
                'long' => '107.619125',
            ],
            [
                'kode' => '3274',
                'name' => 'Kota Cirebon',
                'lat' => '-6.739660',
                'long' => '108.581062',
            ],
            [
                'kode' => '3275',
                'name' => 'Kota Bekasi',
                'lat' => '-6.224140',
                'long' => '106.991280',
            ],
            [
                'kode' => '3276',
                'name' => 'Kota Depok',
                'lat' => '-6.421540',
                'long' => '106.828873',
            ],
            [
                'kode' => '3277',
                'name' => 'Kota Cimahi',
                'lat' => '-6.872750',
                'long' => '107.546181',
            ],
            [
                'kode' => '3278',
                'name' => 'Kota Tasikmalaya',
                'lat' => '-7.307220',
                'long' => '108.201790',
            ],
            [
                'kode' => '3279',
                'name' => 'Kota Banjar',
                'lat' => '-7.374585',
                'long' => '108.558189',
            ],
        ];

        foreach ($areas as $area) {
            Area::create($area);
        }
    }
}
