<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Color;
use App\Models\Glassware;
use App\Models\Standard;
use App\Models\Location;
use App\Models\Trademark;
use App\Models\Shape;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


            // Location : Desikator, Kulkas, Freezer
            // Trademark : Sigma Aldrich, USP, EP, Genero

        Standard::create([
            'catalog' => 'PHR1234',
            'location_id' => 1,
            'trademark_id' => 1,
            'name' => 'Cyanocobalamin',
            'slug' => 'cyanocobalamin',
            'batch' => 'LRAC1234',
            'departement' => 'Andev',
            'storage' => 'Desikator',
            'number' => 20,
            'contain' => 1000,
            'brand' => 'Sigma Aldrich',
            'expired' => '2023-12-31',
            'content' => 100,
            'stock' => 12,
            'openned' => 2,
            'outofstock' => 3
        ]);

        Standard::create([
            'catalog' => 'PHR4321',
            'location_id' => 2,
            'trademark_id' => 2,
            'name' => 'Benzoic Acid',
            'slug' => 'benzoic-acid',
            'batch' => 'LRAC4321',
            'departement' => 'Andev',
            'storage' => 'Desikator',
            'number' => 20,
            'contain' => 1000,
            'brand' => 'Sigma Aldrich',
            'expired' => '2023-12-31',
            'content' => 100,
            'stock' => 12,
            'openned' => 2,
            'outofstock' => 3
        ]);

        Location::create([
            'name' => 'Desikator',
            'slug' => 'desikator'
        ]);
            
        Location::create([
            'name' => 'Kulkas',
            'slug' => 'kulkas'
        ]);

        Location::create([
            'name' => 'Freezer',
            'slug' => 'freezer'
        ]);

        Trademark::create([ 
            'name' => 'Sigma Aldrich',
            'slug' => 'sigma-aldrich'
        ]);

        Trademark::create([
            'name' => 'USP',
            'slug' => 'usp'
        ]);

        Trademark::create([
            'name' => 'EP',
            'slug' => 'ep'
        ]);

        Trademark::create([
            'name' => 'Genero Pharmaceuticals',
            'slug' => 'genero-pharmaceuticals'
        ]);

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

        Color::create([
            'name' => 'Clear',
            'slug' => 'clear'
        ]);

        Color::create([
            'name' => 'Amber',
            'slug' => 'amber'
        ]);
    }
}
