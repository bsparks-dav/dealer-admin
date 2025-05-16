<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\CustomerNote;

class CustomerNoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CustomerNote::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'cus_no' => fake()->word(),
            'cus_comment1' => fake()->text(),
            'cus_note_1' => fake()->text(),
            'cus_note_2' => fake()->text(),
            'cus_note_3' => fake()->text(),
            'cus_note_4' => fake()->text(),
            'cus_note_5' => fake()->text(),
        ];
    }
}
