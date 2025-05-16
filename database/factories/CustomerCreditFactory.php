<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\CustomerCredit;

class CustomerCreditFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CustomerCredit::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'cus_no' => fake()->word(),
            'cus_cr_limit' => fake()->randomFloat(0, 0, 9999999999.),
            'cus_cr_rating' => fake()->word(),
            'cus_cr_hold_fg' => fake()->word(),
        ];
    }
}
