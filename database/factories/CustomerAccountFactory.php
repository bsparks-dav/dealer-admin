<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\CustomerAccount;

class CustomerAccountFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CustomerAccount::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'cus_no' => fake()->word(),
            'cus_collector' => fake()->word(),
            'cus_order_loc' => fake()->word(),
            'cus_terr' => fake()->word(),
            'cus_ar_acct_no' => fake()->word(),
            'cus_ship_via_cd' => fake()->word(),
            'cus_ups_zone' => fake()->word(),
            'cus_terms_cd' => fake()->word(),
            'cus_user_date' => fake()->date(),
            'cus_user_amt' => fake()->randomFloat(0, 0, 9999999999.),
            'cus_exempt_exp_date' => fake()->date(),
            'cus_exempt_reason_cd' => fake()->word(),
            'cus_bill_to_no' => fake()->word(),
            'cus_form_no' => fake()->word(),
            'cus_slm_start_dt' => fake()->date(),
            'cus_abc_class' => fake()->word(),
            'cus_frt_pay_code' => fake()->word(),
            'cus_del_lead_time' => fake()->word(),
            'cus_pick_inv_amt' => fake()->date(),
            'cus_del_day_erly_alw' => fake()->word(),
            'cus_access_date' => fake()->date(),
            'cus_access_time' => fake()->dateTime(),
            'cus_transfer_to_loc' => fake()->word(),
            'cus_transit_days' => fake()->numberBetween(-10000, 10000),
        ];
    }
}
