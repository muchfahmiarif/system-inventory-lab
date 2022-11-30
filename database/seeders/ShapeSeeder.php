<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Shape;

class ShapeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Shape::create ([
            'name' => 'Labu ukur',
            'slug' => 'labu-ukur'
        ]);

        Shape::create ([
            'name' => 'Pipet Volume',
            'slug' => 'pipet-volume'
        ]);

        Shape::create ([
            'name' => 'Pipet Ukur',
            'slug' => 'pipet-ukur'
        ]);

        Shape::create ([
            'name' => 'Beaker Glass',
            'slug' => 'beaker-glass'
        ]);

        Shape::create ([
            'name' => 'Pipet Tetes',
            'slug' => 'pipet-tetes'
        ]);

        Shape::create ([
            'name' => 'Botol Fase Gerak',
            'slug' => 'botol-fase-gerak'
        ]);

        Shape::create ([
            'name' => 'Bulb',
            'slug' => 'bulb'
        ]);
    }
}
