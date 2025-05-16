<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\CustomerTaxCode;

class CustomerTaxCodeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CustomerTaxCode::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'cus_no' => fake()->word(),
            'cus_txbl_fg' => fake()->word(),
            'cus_tx_cd1' => fake()->word(),
            'cus_tx_cd2' => fake()->word(),
            'cus_tx_cd3' => fake()->word(),
        ];
    }
}
