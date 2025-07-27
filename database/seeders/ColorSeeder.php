<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $colors = [
            [
                'name' => 'Classic Black',
                'description' => 'Deep, solid black color',
                'hex_code' => '#000000',
            ],
            [
                'name' => 'Pure White',
                'description' => 'Clean, bright white',
                'hex_code' => '#FFFFFF',
            ],
            [
                'name' => 'Navy Blue',
                'description' => 'Dark, professional blue',
                'hex_code' => '#000080',
            ],
            [
                'name' => 'Forest Green',
                'description' => 'Rich natural green',
                'hex_code' => '#228B22',
            ],
            [
                'name' => 'Ruby Red',
                'description' => 'Vibrant, deep red',
                'hex_code' => '#E0115F',
            ],
            [
                'name' => 'Royal Purple',
                'description' => 'Rich, elegant purple',
                'hex_code' => '#7851A9',
            ],
            [
                'name' => 'Sunset Orange',
                'description' => 'Warm, energetic orange',
                'hex_code' => '#FD5E53',
            ],
            [
                'name' => 'Silver Gray',
                'description' => 'Neutral, metallic gray',
                'hex_code' => '#C0C0C0',
            ],
            [
                'name' => 'Rose Gold',
                'description' => 'Trendy metallic pink',
                'hex_code' => '#B76E79',
            ],
            [
                'name' => 'Turquoise',
                'description' => 'Bright, tropical blue-green',
                'hex_code' => '#40E0D0',
            ],
        ];

        foreach ($colors as $color) {
            Color::create($color);
        }
    }
}
