<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\InvoicePayment;

class InvoicePaymentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = InvoicePayment::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'inv_no' => fake()->word(),
            'inv_profit_center' => fake()->word(),
            'inv_tot_sale_amt' => fake()->randomFloat(0, 0, 9999999999.),
            'inv_tot_cost' => fake()->randomFloat(0, 0, 9999999999.),
            'inv_tot_weight' => fake()->randomFloat(0, 0, 9999999999.),
            'inv_misc_chg_amt' => fake()->randomFloat(0, 0, 9999999999.),
            'inv_misc_chg_acct_no' => fake()->word(),
            'inv_payment_amt' => fake()->randomFloat(0, 0, 9999999999.),
            'inv_payment_disc_amt' => fake()->randomFloat(0, 0, 9999999999.),
            'inv_check_no' => fake()->word(),
            'inv_check_date' => fake()->date(),
            'inv_cash_acct_no' => fake()->word(),
            'inv_payment_tp' => fake()->word(),
            'inv_full_pay_date' => fake()->date(),
            'inv_acc_misc_chg_amt' => fake()->randomFloat(0, 0, 9999999999.),
            'inv_acc_frt_amt' => fake()->randomFloat(0, 0, 9999999999.),
            'inv_acc_tot_sale_amt' => fake()->randomFloat(0, 0, 9999999999.),
            'inv_comm_percent' => fake()->randomFloat(0, 0, 9999999999.),
            'inv_comm_amount' => fake()->randomFloat(0, 0, 9999999999.),
            'inv_comment1' => fake()->text(),
            'inv_comment2' => fake()->text(),
            'inv_comment3' => fake()->text(),
        ];
    }
}
