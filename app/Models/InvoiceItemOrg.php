<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceItemOrg extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'inv_itm_inv_no',
        'inv_itm_seq_no',
        'inv_itm_price_org',
        'inv_itm_org_bk_ord_no',
        'inv_itm_org_bk_seqno',
        'inv_itm_org_itm_no',
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
            'inv_itm_price_org' => 'decimal',
        ];
    }
}
