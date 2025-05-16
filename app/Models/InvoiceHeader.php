<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class InvoiceHeader extends Model
{
    use HasFactory;

    public function getQualifiedKeyName(): string
    {
        return $this->getTable() . '.id';
    }

    public function items()
    {
        return $this->hasMany(InvoiceItem::class);
    }

    public function invoiceItems()
    {
        return $this->hasMany(InvoiceItem::class, 'inv_itm_inv_no', 'inv_no');
    }

    public function getRouteKeyName(): string
    {
        return 'id';
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'inv_no',
        'inv_order_no',
        'inv_customer_no',
        'inv_date',
        'inv_date_entered',
        'inv_order_date',
        'inv_type',
        'inv_apply_to_no',
        'inv_purchase_ord_no',
        'inv_no_alt',
        'inv_cust_bal_method',
        'inv_terms_code',
        'inv_frt_pay_code',
        'inv_discount_percent',
        'inv_job_no',
        'inv_mfg_location',
        'inv_department',
        'inv_ar_reference',
        'inv_date_picked',
        'inv_selection_code',
        'inv_posted_date',
        'inv_part_posted_flag',
        'inv_copy_to_bm_fg',
        'inv_closed_fg',
        'inv_store_no',
        'inv_rma_status',
        'inv_phatm_inv_flag',
        'inv_dept_no',
        'inv_bol_no',
        'inv_bol_printed',
        'inv_ref_doc_no',
        'inv_po_req_gen_flg',
        'customer_id',
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
            'inv_date' => 'date',
            'inv_date_entered' => 'date',
            'inv_order_date' => 'date',
            'inv_discount_percent' => 'decimal',
            'inv_date_picked' => 'date',
            'inv_posted_date' => 'date',
            'customer_id' => 'integer',
        ];
    }

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
}
