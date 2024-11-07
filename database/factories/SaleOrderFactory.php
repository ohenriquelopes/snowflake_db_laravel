<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SaleOrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fk_id_client' => $this->faker->numberBetween(1, 100),
            'data_order' => $this->faker->dateTimeThisYear(),
            'total' => $this->faker->randomFloat(2, 1, 1000),
        ];
    }
}
