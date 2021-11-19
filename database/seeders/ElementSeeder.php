<?php

namespace Database\Seeders;

use App\Models\Element;
use Illuminate\Database\Seeder;

class ElementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $elements = [
            [
                'name_element' => 'Bahasa',
            ],
            [
                'name_element' => 'Religi',
            ],
            [
                'name_element' => 'Kesenian',
            ],
            [
                'name_element' => 'Ekonomi',
            ],
            [
                'name_element' => 'Pengetahuan',
            ],
            [
                'name_element' => 'Teknologi',
            ],
            [
                'name_element' => 'Kekerabatan & Organisasi Sosial',
            ],

        ];

        foreach ($elements as $element) {
            Element::create($element);
        }
    }
}
