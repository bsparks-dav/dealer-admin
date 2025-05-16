<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\CustomerSale;

class CustomerSaleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CustomerSale::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'cus_no' => fake()->word(),
            'cus_sales_ptd' => fake()->randomFloat(0, 0, 9999999999.),
            'cus_sales_ytd' => fake()->randomFloat(0, 0, 9999999999.),
            'cus_sales_last_yr' => fake()->randomFloat(0, 0, 9999999999.),
            'cus_sales_yr_bf_ly' => fake()->randomFloat(0, 0, 9999999999.),
        ];
    }
}
