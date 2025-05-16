<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerFlag extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cus_no',
        'cus_allow_sub_itms',
        'cus_allow_bo',
        'cus_allow_part_ship',
        'cus_print_dunn_fg',
        'cus_fin_chg_fg',
        'cus_use_bill_to_adrr',
        'cus_restrict_item',
        'cus_immed_ord_ack',
        'cus_transfer_flag',
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
