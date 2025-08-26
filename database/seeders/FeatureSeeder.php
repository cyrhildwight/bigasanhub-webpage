<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Feature;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $features = [
            [
                'title' => 'Turnkey Setup',
                'description' => 'Complete store setup with branding, equipment, and inventory.',
                'position' => 1,
            ],
            [
                'title' => 'Supply Chain Support',
                'description' => 'Direct sourcing from trusted rice suppliers and importers.',
                'position' => 2,
            ],
            [
                'title' => 'Marketing & Branding Assistance',
                'description' => 'Promotional materials, digital marketing strategies, and ongoing support.',
                'position' => 3,
            ],
            [
                'title' => 'Training & Operations Support',
                'description' => 'Guidance on inventory management and financial monitoring.',
                'position' => 4,
            ],
        ];

        foreach ($features as $feature) {
            Feature::create($feature);
        }
    }
}
