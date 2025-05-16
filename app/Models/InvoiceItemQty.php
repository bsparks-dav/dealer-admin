<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceItemQty extends Model
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
        'inv_itm_qty_order',
        'inv_itm_qty_to_ship',
        'inv_itm_qty_back_ord',
        'inv_itm_qty_rt_to_st',
        'inv_itm_tot_qty_ord',
        'inv_itm_tot_qty_shp',
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
        ];
    }
}
