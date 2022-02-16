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
                'slug' => 'kabupaten-bogor',
                'latitude' => '-6.551776',
                'longitude' => '106.629128',
            ],
            [
                'kode_area' => '3202',
                'name_area' => 'Kabupaten Sukabumi',
                'slug' => 'kabupaten-sukabumi',
                'latitude' => '-6.864924',
                'longitude' => '106.953568',
            ],
            [
                'kode_area' => '3203',
                'name_area' => 'Kabupaten Cianjur',
                'slug' => 'kabupaten-cianjur',
                'latitude' => '-6.811810',
                'longitude' => '107.145409',
            ],
            [
                'kode_area' => '3204',
                'name_area' => 'Kabupaten Bandung',
                'slug' => 'kabupaten-bandung',
                'latitude' => '-7.134070',
                'longitude' => '107.621529',
            ],
            [
                'kode_area' => '3205',
                'name_area' => 'Kabupaten Garut',
                'slug' => 'kabupaten-garut',
                'latitude' => '-7.2162751',
                'longitude' => '107.8990084',
            ],
            [
                'kode_area' => '3206',
                'name_area' => 'Kabupaten Tasikmalaya',
                'slug' => 'kabupaten-tasikmalaya',
                'latitude' => '-7.5486367',
                'longitude' => '108.1347269',
            ],
            [
                'kode_area' => '3207',
                'name_area' => 'Kabupaten Ciamis',
                'slug' => 'kabupaten-ciamis',
                'latitude' => '-7.326510',
                'longitude' => '108.357063',
            ],
            [
                'kode_area' => '3208',
                'name_area' => 'Kabupaten Kuningan',
                'slug' => 'kabupaten-kuningan',
                'latitude' => '-6.980870',
                'longitude' => '108.477570',
            ],
            [
                'kode_area' => '3209',
                'name_area' => 'Kabupaten Cirebon',
                'slug' => 'kabupaten-cirebon',
                'latitude' => '-6.7961846',
                'longitude' => '108.5212388',
            ],
            [
                'kode_area' => '3210',
                'name_area' => 'Kabupaten Majalengka',
                'slug' => 'kabupaten-majalengka',
                'latitude' => '-6.834010',
                'longitude' => '108.227631',
            ],
            [
                'kode_area' => '3211',
                'name_area' => 'Kabupaten Sumedang',
                'slug' => 'kabupaten-sumedang',
                'latitude' => '-6.850370',
                'longitude' => '107.922394',
            ],
            [
                'kode_area' => '3212',
                'name_area' => 'Kabupaten Indramayu',
                'slug' => 'kabupaten-indramayu',
                'latitude' => '-6.472450',
                'longitude' => '108.294853',
            ],
            [
                'kode_area' => '3213',
                'name_area' => 'Kabupaten Subang',
                'slug' => 'kabupaten-subang',
                'latitude' => '-6.5711493',
                'longitude' => '107.7593949',
            ],
            [
                'kode_area' => '3214',
                'name_area' => 'Kabupaten Purwakarta',
                'slug' => 'kabupaten-purwakarta',
                'latitude' => '-6.561390',
                'longitude' => '107.443810',
            ],
            [
                'kode_area' => '3215',
                'name_area' => 'Kabupaten Karawang',
                'slug' => 'kabupaten-karawang',
                'latitude' => '-6.296900',
                'longitude' => '107.293762',
            ],
            [
                'kode_area' => '3216',
                'name_area' => 'Kabupaten Bekasi',
                'slug' => 'kabupaten-bekasi',
                'latitude' => '-6.243310',
                'longitude' => '106.993721',
            ],
            [
                'kode_area' => '3217',
                'name_area' => 'Kabupaten Bandung Barat',
                'slug' => 'kabupaten-bandung-barat',
                'latitude' => '-6.9723836',
                'longitude' => '107.3704732',
            ],
            [
                'kode_area' => '3218',
                'name_area' => 'Kabupaten Pangandaran',
                'slug' => 'kabupaten-pangandaran',
                'latitude' => '-7.684350',
                'longitude' => '108.659538',
            ],
            [
                'kode_area' => '3271',
                'name_area' => 'Kota Bogor',
                'slug' => 'kota-bogor',
                'latitude' => '-6.5976236',
                'longitude' => '106.7973811',
            ],
            [
                'kode_area' => '3272',
                'name_area' => 'Kota Sukabumi',
                'slug' => 'kota-sukabumi',
                'latitude' => '-6.9369274',
                'longitude' => '106.8822905',
            ],
            [
                'kode_area' => '3273',
                'name_area' => 'Kota Bandung',
                'slug' => 'kota-bandung',
                'latitude' => '-6.917464',
                'longitude' => '107.619125',
            ],
            [
                'kode_area' => '3274',
                'name_area' => 'Kota Cirebon',
                'slug' => 'kota-cirebon',
                'latitude' => '-6.739660',
                'longitude' => '108.581062',
            ],
            [
                'kode_area' => '3275',
                'name_area' => 'Kota Bekasi',
                'slug' => 'kota-bekasi',
                'latitude' => '-6.2165485',
                'longitude' => '107.1304152',
            ],
            [
                'kode_area' => '3276',
                'name_area' => 'Kota Depok',
                'slug' => 'kota-depok',
                'latitude' => '-6.421540',
                'longitude' => '106.828873',
            ],
            [
                'kode_area' => '3277',
                'name_area' => 'Kota Cimahi',
                'slug' => 'kota-cimahi',
                'latitude' => '-6.872750',
                'longitude' => '107.546181',
            ],
            [
                'kode_area' => '3278',
                'name_area' => 'Kota Tasikmalaya',
                'slug' => 'kota-tasikmalaya',
                'latitude' => '-7.307220',
                'longitude' => '108.201790',
            ],
            [
                'kode_area' => '3279',
                'name_area' => 'Kota Banjar',
                'slug' => 'kota-banjar',
                'latitude' => '-7.374585',
                'longitude' => '108.558189',
            ],
        ];

        foreach ($areas as $area) {
            Area::create($area);
        }
    }
}
