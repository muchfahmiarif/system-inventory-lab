<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Glassware;

class GlasswareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Glassware::create([
            'shape_id' => 1, // labu ukur
            'color_id' => 1, // Clear
            'catalog' => 55640,
            'name' => 'Volumetric Flask',
            'batch' => '35Y17',
            'type' => 'Clear',
            'volume' => 100,
        ]);

        Glassware::create([
            'shape_id' => 1, // labu ukur
            'color_id' => 2, // Amber
            'catalog' => '55640',
            'name' => 'Volumetric Flask',
            'batch' => '17X18',
            'type' => 'Amber',
            'volume' => 50,
        ]);
    }
}
