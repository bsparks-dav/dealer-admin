<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\InvoiceItemQty;

class InvoiceItemQtyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = InvoiceItemQty::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'inv_itm_inv_no' => fake()->word(),
            'inv_itm_seq_no' => fake()->numberBetween(-10000, 10000),
            'inv_itm_qty_order' => fake()->numberBetween(-10000, 10000),
            'inv_itm_qty_to_ship' => fake()->numberBetween(-10000, 10000),
            'inv_itm_qty_back_ord' => fake()->numberBetween(-10000, 10000),
            'inv_itm_qty_rt_to_st' => fake()->numberBetween(-10000, 10000),
            'inv_itm_tot_qty_ord' => fake()->numberBetween(-10000, 10000),
            'inv_itm_tot_qty_shp' => fake()->numberBetween(-10000, 10000),
        ];
    }
}
