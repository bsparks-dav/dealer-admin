<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\CustomerFfl;

class CustomerFflFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CustomerFfl::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'cus_no' => fake()->word(),
            'cus_ffl_no' => fake()->word(),
            'cus_ffl_exp_date' => fake()->date(),
            'cus_ffl_filler' => fake()->word(),
        ];
    }
}
