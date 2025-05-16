<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\InvoiceEdi;

class InvoiceEdiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = InvoiceEdi::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'inv_no' => fake()->word(),
            'inv_edi_fg' => fake()->word(),
            'inv_edi_po_no_cont' => fake()->word(),
            'inv_edi_exp_flg' => fake()->word(),
        ];
    }
}
