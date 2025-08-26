<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductVariety;

class ProductVarietySeeder extends Seeder
{
    public function run(): void
    {
        // Use exact filenames that exist in public/images
        $varieties = [
            ['name' => 'Hapinoy Dinorado',        'image' => 'dinorado.png'],
            ['name' => 'Hapinoy Hasmine',         'image' => 'hasmin.png'],
            ['name' => 'Hapinoy Ivory',           'image' => 'ivory.png'],
            ['name' => 'Hapinoy Prima Jasmine',   'image' => 'prima.png'],
            ['name' => 'Doña Conchita',           'image' => 'dona.png'],
            ['name' => 'King Leone',              'image' => 'leone.png'],
            ['name' => 'Golden Field White Rice', 'image' => 'white.png'],
            ['name' => 'Oregon Rice',             'image' => 'oregon.png'],
            ['name' => 'Lion Ivory',              'image' => 'lion.png'],
            ['name' => 'Ganador',                 'image' => 'ganador.png'],
            ['name' => 'White Corn Grits #16 (Mais)', 'image' => 'mais1.png'],
            ['name' => 'White Corn Grits #14 (Mais)', 'image' => 'mais.png'],
        ];

        $position = 1;
        foreach ($varieties as $data) {
            ProductVariety::updateOrCreate(
                ['image' => $data['image']],
                [
                    'name' => $data['name'],
                    'image' => $data['image'],
                    'position' => $position++,
                    'is_active' => true,
                ]
            );
        }
    }
}
