<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FAQ;

class FAQSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faqs = [
            [
                'question' => 'Do you deliver outside Cebu?',
                'answer' => 'Yes. We primarily serve Cebu but can arrange logistics to nearby provinces for wholesale orders.',
                'position' => 1,
                'is_active' => true,
            ],
            [
                'question' => 'What is the minimum order for wholesale?',
                'answer' => 'Minimums vary by variety. Typically 10 sacks and up. Contact us for current terms.',
                'position' => 2,
                'is_active' => true,
            ],
            [
                'question' => 'Can I request samples?',
                'answer' => 'We can arrange samples for qualified wholesale buyers. Please reach out with your requirements.',
                'position' => 3,
                'is_active' => true,
            ],
            [
                'question' => 'Do prices change often?',
                'answer' => 'We provide transparent, updated pricing based on market conditions. Get a quote for the latest rates.',
                'position' => 4,
                'is_active' => true,
            ],
        ];

        foreach ($faqs as $faq) {
            FAQ::create($faq);
        }
    }
}
