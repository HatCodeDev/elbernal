<?php

namespace Database\Seeders;

use App\Models\Tostado;
use App\Models\Bebida;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         // Crear registros de Tostado
         $tiposDeTostado = [
            'Light Roast',
            'Medium Roast',
            'Medium-Dark Roast',
            'Dark Roast',
            'French Roast',
            'Espresso Roast',
            'Italian Roast',
            'Spanish Roast',
            'Vienna Roast',
            'Full City+ Roast',
            'American Roast',
            'City Roast',
            'Full City Roast',
            'Cinnamon Roast (Tostado Canela)',
            'New England Roast'
        ];

        // Crear los registros de Tostado
        foreach ($tiposDeTostado as $tipo) {
            Tostado::create(['tostado' => $tipo]);
        }

        // Crear 50 registros de Bebida
        Bebida::factory(50)->create();
    }
}
