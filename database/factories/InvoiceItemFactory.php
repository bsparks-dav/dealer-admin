<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\InvoiceHeader;
use App\Models\InvoiceItem;

class InvoiceItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = InvoiceItem::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'inv_itm_inv_no' => fake()->word(),
            'inv_itm_seq_no' => fake()->numberBetween(-10000, 10000),
            'inv_itm_inv_date' => fake()->date(),
            'inv_itm_cust_no' => fake()->word(),
            'inv_itm_itm_no_alt' => fake()->word(),
            'inv_itm_inv_date_alt' => fake()->date(),
            'inv_itm_desc_1' => fake()->text(),
            'inv_itm_desc_2' => fake()->text(),
            'inv_itm_ser_lot_no' => fake()->word(),
            'inv_itm_ser_eff_date' => fake()->date(),
            'inv_itm_unit_price' => fake()->randomFloat(0, 0, 9999999999.),
            'inv_itm_discount_pct' => fake()->randomFloat(0, 0, 9999999999.),
            'inv_itm_request_date' => fake()->date(),
            'inv_itm_uom' => fake()->word(),
            'inv_itm_unit_cost' => fake()->randomFloat(0, 0, 9999999999.),
            'inv_itm_unit_weight' => fake()->randomFloat(0, 0, 9999999999.),
            'inv_itm_comm_p_o_amt' => fake()->randomFloat(0, 0, 9999999999.),
            'inv_itm_promise_date' => fake()->date(),
            'inv_itm_select_code' => fake()->word(),
            'inv_itm_explode_kit' => fake()->word(),
            'inv_itm_bm_order_no' => fake()->word(),
            'inv_itm_no_package' => fake()->word(),
            'inv_itm_po_xrf_seqno' => fake()->numberBetween(-10000, 10000),
            'inv_itm_prod_cate' => fake()->word(),
            'inv_itm_reason_code' => fake()->word(),
            'inv_itm_prc_lvl_no' => fake()->word(),
            'inv_itm_vendor_no' => fake()->word(),
            'inv_itm_edi_turnarnd' => fake()->word(),
            'inv_itm_cancel_cls' => fake()->word(),
            'inv_itm_bm_ord_tp' => fake()->word(),
            'inv_itm_custom_bom' => fake()->word(),
            'inv_itm_case_size' => fake()->word(),
            'inv_itm_inner_size' => fake()->word(),
            'invoice_header_id' => InvoiceHeader::factory(),
        ];
    }
}
