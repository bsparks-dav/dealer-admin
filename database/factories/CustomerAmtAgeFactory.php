<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\CustomerAmtAge;

class CustomerAmtAgeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CustomerAmtAge::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'cus_no' => fake()->word(),
            'cus_amt_age_pd1' => fake()->randomFloat(0, 0, 9999999999.),
            'cus_amt_age_pd2' => fake()->randomFloat(0, 0, 9999999999.),
            'cus_amt_age_pd3' => fake()->randomFloat(0, 0, 9999999999.),
            'cus_amt_age_pd4' => fake()->randomFloat(0, 0, 9999999999.),
        ];
    }
}
