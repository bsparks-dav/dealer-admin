<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\InvoiceItemFlag;

class InvoiceItemFlagFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = InvoiceItemFlag::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'inv_itm_inv_no' => fake()->word(),
            'inv_itm_seq_no' => fake()->numberBetween(-10000, 10000),
            'inv_itm_tax_flag_1' => fake()->word(),
            'inv_itm_tax_flag_2' => fake()->word(),
            'inv_itm_tax_flag_3' => fake()->word(),
            'inv_itm_back_flag' => fake()->word(),
            'inv_itm_comm_calc_flag' => fake()->word(),
            'inv_itm_taxable_flag' => fake()->word(),
            'inv_itm_stocked_flag' => fake()->word(),
            'inv_itm_control_flag' => fake()->word(),
            'inv_itm_mult_ftr_flg' => fake()->word(),
            'inv_itm_price_flag' => fake()->word(),
            'inv_itm_sty_tmp_flag' => fake()->word(),
            'inv_itm_cpy_to_bm_fg' => fake()->word(),
        ];
    }
}
