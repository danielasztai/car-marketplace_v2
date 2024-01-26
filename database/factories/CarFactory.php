<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'BMW 540i Gran Turismo',
            'brand' => 'bmw',
            'price' => 48790,
            'description' => 'Some description about the fast and amazin BMW 540i GT',
            'prod_year' => '08/2017',
            'km' => 92560,
            'power' => 250,
            'type' => 'Limousine',
            'fuel' => 'Benzin',
            'gearbox' => 'Automatic',
            'mot' => '10/2025',
            'image' => 'images/car_1.jpeg'
        ];
    }
}
