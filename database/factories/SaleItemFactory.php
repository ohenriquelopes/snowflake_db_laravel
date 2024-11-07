<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SaleItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fk_id_sale_order' => $this->faker->numberBetween(1, 100),
            'fk_id_product' => $this->faker->numberBetween(1, 100),
            'quantity' => $this->faker->numberBetween(1, 100),
            'unitary_price' => $this->faker->randomFloat(2, 1, 1000),
            'subtotal' => $this->faker->randomFloat(2, 1, 1000),
        ];
    }
}
