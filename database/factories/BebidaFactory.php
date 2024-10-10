<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bebida>
 */
class BebidaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $tiposDeCafe = [
            'Espresso',
            'Americano',
            'Cappuccino',
            'Latte',
            'Mocha',
            'Macchiato',
            'Flat White',
            'Affogato',
            'Lungo'
        ];

        $metodosDeFiltracion = [
            'Filtro de papel',
            'Aeropress',
            'Prensa francesa',
            'V60',
            'Chemex',
            'Cold Brew',
            'Moka Pot'
        ];

        $complementosDeCafe = [
            'Leche',
            'Azúcar',
            'Canela',
            'Chocolate',
            'Nata',
            'Miel',
            'Jarabe de vainilla',
            'Jarabe de caramelo'
        ];

        return [
            'tipo' => $this->faker->randomElement($tiposDeCafe),
            'tostados_id' => $this->faker->numberBetween(1,15),
            'precio' => $this->faker->randomFloat(2, 50, 180), 
            'filtracion' => $this->faker->randomElement($metodosDeFiltracion),
            'altura' => $this->faker->randomElement(['Pequeño', 'Mediano', 'Grande']),
            'complementos' => $this->faker->randomElement($complementosDeCafe),
            'imagen' => '/imgProducto/example.png',
        ];
    }
}
