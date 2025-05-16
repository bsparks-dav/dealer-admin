<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\CustomerStat;

class CustomerStatFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CustomerStat::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'cus_no' => fake()->word(),
            'cus_cost_ptd' => fake()->randomFloat(0, 0, 9999999999.),
            'cus_cost_ytd' => fake()->randomFloat(0, 0, 9999999999.),
            'cus_cost_last_yr' => fake()->randomFloat(0, 0, 9999999999.),
            'cus_dsc_pct' => fake()->randomFloat(0, 0, 9999999999.),
            'cus_ytd_dsc_given' => fake()->randomFloat(0, 0, 9999999999.),
            'cus_balance' => fake()->randomFloat(0, 0, 9999999999.),
            'cus_high_balance' => fake()->randomFloat(0, 0, 9999999999.),
            'cus_last_sale_dt' => fake()->date(),
            'cus_last_sale_amt' => fake()->randomFloat(0, 0, 9999999999.),
            'cus_inv_ytd' => fake()->randomFloat(0, 0, 9999999999.),
            'cus_inv_last_yr' => fake()->randomFloat(0, 0, 9999999999.),
            'cus_paid_inv_ytd' => fake()->randomFloat(0, 0, 9999999999.),
            'cus_last_stm_age_dt' => fake()->date(),
        ];
    }
}
