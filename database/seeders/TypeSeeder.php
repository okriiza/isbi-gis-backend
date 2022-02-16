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
                'slug' => 'bahasa-sunda-secara-murni',
            ],
            [
                'element_id' => '2',
                'area_id' => '5',
                'name_type' => 'Upacara Ngalungsur Pusaka',
                'slug' => 'upacara-ngalungsur-pusaka',
            ],
            [
                'element_id' => '2',
                'area_id' => '5',
                'name_type' => 'Upacara Seba',
                'slug' => 'upacara-seba',
            ],
            [
                'element_id' => '3',
                'area_id' => '5',
                'name_type' => 'Seni Adu Domba',
                'slug' => 'seni-adu-domba',
            ], [
                'element_id' => '4',
                'area_id' => '5',
                'name_type' => 'Petani',
                'slug' => 'petani',
            ], [
                'element_id' => '5',
                'area_id' => '5',
                'name_type' => 'Hewan Domba',
                'slug' => 'hewan-domba',
            ], [
                'element_id' => '6',
                'area_id' => '5',
                'name_type' => 'Kujang',
                'slug' => 'kujang',
            ], [
                'element_id' => '7',
                'area_id' => '5',
                'name_type' => 'Garut Muslim Archery (GMA)',
                'slug' => 'garut-muslim-archery-gma',
            ], [
                'element_id' => '7',
                'area_id' => '5',
                'name_type' => 'Bersama Talangseng Bisa',
                'slug' => 'bersama-talangseng-bisa',
            ],

        ];

        foreach ($types as $type) {
            Type::create($type);
        }
    }
}
