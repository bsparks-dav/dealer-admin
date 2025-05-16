<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InvoiceItem extends Model
{
    use HasFactory;

    public function invoiceHeader()
    {
        return $this->belongsTo(InvoiceHeader::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'inv_itm_inv_no',
        'inv_itm_seq_no',
        'inv_itm_inv_date',
        'inv_itm_cust_no',
        'inv_itm_itm_no_alt',
        'inv_itm_inv_date_alt',
        'inv_itm_desc_1',
        'inv_itm_desc_2',
        'inv_itm_ser_lot_no',
        'inv_itm_ser_eff_date',
        'inv_itm_unit_price',
        'inv_itm_discount_pct',
        'inv_itm_request_date',
        'inv_itm_uom',
        'inv_itm_unit_cost',
        'inv_itm_unit_weight',
        'inv_itm_comm_p_o_amt',
        'inv_itm_promise_date',
        'inv_itm_select_code',
        'inv_itm_explode_kit',
        'inv_itm_bm_order_no',
        'inv_itm_no_package',
        'inv_itm_po_xrf_seqno',
        'inv_itm_prod_cate',
        'inv_itm_reason_code',
        'inv_itm_prc_lvl_no',
        'inv_itm_vendor_no',
        'inv_itm_edi_turnarnd',
        'inv_itm_cancel_cls',
        'inv_itm_bm_ord_tp',
        'inv_itm_custom_bom',
        'inv_itm_case_size',
        'inv_itm_inner_size',
        'invoice_header_id',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'id' => 'integer',
            'inv_itm_inv_date'     => 'date',
            'inv_itm_inv_date_alt' => 'date',
            'inv_itm_ser_eff_date' => 'date',
            'inv_itm_unit_price'   => 'decimal',
            'inv_itm_discount_pct' => 'decimal',
            'inv_itm_request_date' => 'date',
            'inv_itm_unit_cost'    => 'decimal',
            'inv_itm_unit_weight'  => 'decimal',
            'inv_itm_comm_p_o_amt' => 'decimal',
            'inv_itm_promise_date' => 'date',
            'invoice_header_id'    => 'integer',
        ];
    }

}
