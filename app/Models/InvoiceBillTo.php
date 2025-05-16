<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceBillTo extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'inv_no',
        'inv_bill_to_no',
        'inv_bill_to_name',
        'inv_bill_to_addr_1',
        'inv_bill_to_addr_2',
        'inv_bill_to_city',
        'inv_bill_to_st',
        'inv_bill_to_zipcd',
        'inv_bill_to_country',
        'bill_to_filler1',
        'bill_to_filler2',
        'inv_bill_to_fr_fo_fg',
        'inv_date_billed',
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
            'inv_date_billed' => 'date',
        ];
    }
}
