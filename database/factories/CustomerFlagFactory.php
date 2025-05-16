<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\CustomerFlag;

class CustomerFlagFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CustomerFlag::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'cus_no' => fake()->word(),
            'cus_allow_sub_itms' => fake()->word(),
            'cus_allow_bo' => fake()->word(),
            'cus_allow_part_ship' => fake()->word(),
            'cus_print_dunn_fg' => fake()->word(),
            'cus_fin_chg_fg' => fake()->word(),
            'cus_use_bill_to_adrr' => fake()->word(),
            'cus_restrict_item' => fake()->word(),
            'cus_immed_ord_ack' => fake()->word(),
            'cus_transfer_flag' => fake()->word(),
        ];
    }
}
