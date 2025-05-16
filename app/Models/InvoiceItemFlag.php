<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceItemFlag extends Model
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
        'inv_itm_tax_flag_1',
        'inv_itm_tax_flag_2',
        'inv_itm_tax_flag_3',
        'inv_itm_back_flag',
        'inv_itm_comm_calc_flag',
        'inv_itm_taxable_flag',
        'inv_itm_stocked_flag',
        'inv_itm_control_flag',
        'inv_itm_mult_ftr_flg',
        'inv_itm_price_flag',
        'inv_itm_sty_tmp_flag',
        'inv_itm_cpy_to_bm_fg',
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
