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
                'name' => 'Bahasa',
            ],
            [
                'name' => 'Religi',
            ],
            [
                'name' => 'Kesenian',
            ],
            [
                'name' => 'Ekonomi',
            ],
            [
                'name' => 'Pengetahuan',
            ],
            [
                'name' => 'Teknologi',
            ],
            [
                'name' => 'Kekerabatan & Organisasi Sosial',
            ],

        ];

        foreach ($elements as $element) {
            Element::create($element);
        }
    }
}
