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
                'kode_area' => '3201',
                'name_area' => 'Kabupaten Bogor',
                'latitude' => '-6.551776',
                'longitude' => '106.629128',
            ],
            [
                'kode_area' => '3202',
                'name_area' => 'Kabupaten Sukabumi',
                'latitude' => '-6.864924',
                'longitude' => '106.953568',
            ],
            [
                'kode_area' => '3203',
                'name_area' => 'Kabupaten Cianjur',
                'latitude' => '-6.811810',
                'longitude' => '107.145409',
            ],
            [
                'kode_area' => '3204',
                'name_area' => 'Kabupaten Bandung',
                'latitude' => '-7.134070',
                'longitude' => '107.621529',
            ],
            [
                'kode_area' => '3205',
                'name_area' => 'Kabupaten Garut',
                'latitude' => '-7.248400',
                'longitude' => '107.909653',
            ],
            [
                'kode_area' => '3206',
                'name_area' => 'Kabupaten Tasikmalaya',
                'latitude' => '-7.325900',
                'longitude' => '108.220932',
            ],
            [
                'kode_area' => '3207',
                'name_area' => 'Kabupaten Ciamis',
                'latitude' => '-7.326510',
                'longitude' => '108.357063',
            ],
            [
                'kode_area' => '3208',
                'name_area' => 'Kabupaten Kuningan',
                'latitude' => '-6.980870',
                'longitude' => '108.477570',
            ],
            [
                'kode_area' => '3209',
                'name_area' => 'Kabupaten Cirebon',
                'latitude' => '-6.711210',
                'longitude' => '108.559242',
            ],
            [
                'kode_area' => '3210',
                'name_area' => 'Kabupaten Majalengka',
                'latitude' => '-6.834010',
                'longitude' => '108.227631',
            ],
            [
                'kode_area' => '3211',
                'name_area' => 'Kabupaten Sumedang',
                'latitude' => '-6.850370',
                'longitude' => '107.922394',
            ],
            [
                'kode_area' => '3212',
                'name_area' => 'Kabupaten Indramayu',
                'latitude' => '-6.472450',
                'longitude' => '108.294853',
            ],
            [
                'kode_area' => '3213',
                'name_area' => 'Kabupaten Subang',
                'latitude' => '3.081600',
                'longitude' => '101.585430',
            ],
            [
                'kode_area' => '3214',
                'name_area' => 'Kabupaten Purwakarta',
                'latitude' => '-6.561390',
                'longitude' => '107.443810',
            ],
            [
                'kode_area' => '3215',
                'name_area' => 'Kabupaten Karawang',
                'latitude' => '-6.296900',
                'longitude' => '107.293762',
            ],
            [
                'kode_area' => '3216',
                'name_area' => 'Kabupaten Bekasi',
                'latitude' => '-6.243310',
                'longitude' => '106.993721',
            ],
            [
                'kode_area' => '3217',
                'name_area' => 'Kabupaten Bandung Barat',
                'latitude' => '-6.902160',
                'longitude' => '107.619110',
            ],
            [
                'kode_area' => '3218',
                'name_area' => 'Kabupaten Pangandaran',
                'latitude' => '-7.684350',
                'longitude' => '108.659538',
            ],
            [
                'kode_area' => '3271',
                'name_area' => 'Kota Bogor',
                'latitude' => '-6.622620',
                'longitude' => '106.777191',
            ],
            [
                'kode_area' => '3272',
                'name_area' => 'Kota Sukabumi',
                'latitude' => '-6.920740',
                'longitude' => '106.931020',
            ],
            [
                'kode_area' => '3273',
                'name_area' => 'Kota Bandung',
                'latitude' => '-6.917464',
                'longitude' => '107.619125',
            ],
            [
                'kode_area' => '3274',
                'name_area' => 'Kota Cirebon',
                'latitude' => '-6.739660',
                'longitude' => '108.581062',
            ],
            [
                'kode_area' => '3275',
                'name_area' => 'Kota Bekasi',
                'latitude' => '-6.224140',
                'longitude' => '106.991280',
            ],
            [
                'kode_area' => '3276',
                'name_area' => 'Kota Depok',
                'latitude' => '-6.421540',
                'longitude' => '106.828873',
            ],
            [
                'kode_area' => '3277',
                'name_area' => 'Kota Cimahi',
                'latitude' => '-6.872750',
                'longitude' => '107.546181',
            ],
            [
                'kode_area' => '3278',
                'name_area' => 'Kota Tasikmalaya',
                'latitude' => '-7.307220',
                'longitude' => '108.201790',
            ],
            [
                'kode_area' => '3279',
                'name_area' => 'Kota Banjar',
                'latitude' => '-7.374585',
                'longitude' => '108.558189',
            ],
        ];

        foreach ($areas as $area) {
            Area::create($area);
        }
    }
}
