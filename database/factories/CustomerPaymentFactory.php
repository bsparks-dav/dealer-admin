<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\CustomerPayment;

class CustomerPaymentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CustomerPayment::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'cus_no' => fake()->word(),
            'cus_last_pay_dt' => fake()->date(),
            'cus_last_pay_amt' => fake()->randomFloat(0, 0, 9999999999.),
            'cus_avg_pay_ytd' => fake()->randomFloat(0, 0, 9999999999.),
            'cus_avg_pay_last_yr' => fake()->randomFloat(0, 0, 9999999999.),
        ];
    }
}
