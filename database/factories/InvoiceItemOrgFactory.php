<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\InvoiceItemOrg;

class InvoiceItemOrgFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = InvoiceItemOrg::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'inv_itm_inv_no' => fake()->word(),
            'inv_itm_seq_no' => fake()->numberBetween(-10000, 10000),
            'inv_itm_price_org' => fake()->randomFloat(0, 0, 9999999999.),
            'inv_itm_org_bk_ord_no' => fake()->word(),
            'inv_itm_org_bk_seqno' => fake()->numberBetween(-10000, 10000),
            'inv_itm_org_itm_no' => fake()->word(),
        ];
    }
}
