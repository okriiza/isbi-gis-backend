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
                'slug' => 'bahasa',
            ],
            [
                'name_element' => 'Religi',
                'slug' => 'religi',
            ],
            [
                'name_element' => 'Kesenian',
                'slug' => 'kesenian',
            ],
            [
                'name_element' => 'Ekonomi',
                'slug' => 'ekonomi',
            ],
            [
                'name_element' => 'Pengetahuan',
                'slug' => 'pengetahuan',
            ],
            [
                'name_element' => 'Teknologi',
                'slug' => 'teknologi',
            ],
            [
                'name_element' => 'Kekerabatan & Organisasi Sosial',
                'slug' => 'kekerabatan-organisasi-sosial',
            ],

        ];

        foreach ($elements as $element) {
            Element::create($element);
        }
    }
}
