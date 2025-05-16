<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Customer;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'cus_no' => fake()->word(),
            'cus_name' => fake()->word(),
            'cus_corr_name' => fake()->word(),
            'cus_street1' => fake()->word(),
            'cus_street2' => fake()->word(),
            'cus_city' => fake()->word(),
            'cus_st' => fake()->word(),
            'cus_zip' => fake()->word(),
            'cus_country' => fake()->word(),
            'cus_geo_code' => fake()->word(),
            'cus_outside_city_lm' => fake()->word(),
            'cus_contact' => fake()->word(),
            'cus_phone_no' => fake()->word(),
            'cus_fax_number' => fake()->word(),
            'cus_start_dt' => fake()->date(),
            'cus_slm_no' => fake()->word(),
            'cus_tp' => fake()->word(),
            'cus_bal_meth' => fake()->word(),
            'cus_stm_freq' => fake()->word(),
            'cus_exempt_no' => fake()->word(),
            'cus_search_name' => fake()->word(),
        ];
    }
}
