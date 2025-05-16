<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceShipTo extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'inv_no',
        'inv_ship_to_no',
        'inv_ship_to_name',
        'inv_ship_to_addr_1',
        'inv_ship_to_addr_2',
        'inv_ship_to_city',
        'inv_ship_to_st',
        'inv_ship_to_zipcd',
        'inv_ship_to_country',
        'ship_to_filler1',
        'ship_to_filler2',
        'inv_shipping_date',
        'inv_ship_via_code',
        'inv_ship_instruct1',
        'inv_ship_instruct2',
        'inv_ship_to_fr_fo_fg',
        'inv_frt_amt',
        'inv_frt_acct_no',
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
            'inv_shipping_date' => 'date',
            'inv_frt_amt' => 'decimal',
        ];
    }
}
