<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            [
                'element_id' => '1',
                'area_id' => '5',
                'name_type' => 'Bahasa Sunda Secara Murni',
            ],
            [
                'element_id' => '2',
                'area_id' => '5',
                'name_type' => 'Upacara Ngalungsur Pusaka',
            ],
            [
                'element_id' => '2',
                'area_id' => '5',
                'name_type' => 'Upacara Seba',
            ],
            [
                'element_id' => '3',
                'area_id' => '5',
                'name_type' => 'Seni Adu Domba',
            ], [
                'element_id' => '4',
                'area_id' => '5',
                'name_type' => 'Petani',
            ], [
                'element_id' => '5',
                'area_id' => '5',
                'name_type' => 'Hewan Domba',
            ], [
                'element_id' => '6',
                'area_id' => '5',
                'name_type' => 'Kujang',
            ], [
                'element_id' => '7',
                'area_id' => '5',
                'name_type' => 'Garut Muslim Archery (GMA)',
            ], [
                'element_id' => '7',
                'area_id' => '5',
                'name_type' => 'Bersama Talangseng Bisa',
            ],

        ];

        foreach ($types as $type) {
            Type::create($type);
        }
    }
}
