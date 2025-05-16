<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceSalesPerson extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'inv_no',
        'inv_salesman_no1',
        'inv_salesman_pct_co1',
        'inv_salesman_com_am1',
        'inv_salesman_no2',
        'inv_salesman_pct_co2',
        'inv_salesman_com_am2',
        'inv_salesman_no3',
        'inv_salesman_pct_co3',
        'inv_salesman_com_am3',
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
            'inv_salesman_pct_co1' => 'decimal',
            'inv_salesman_com_am1' => 'decimal',
            'inv_salesman_pct_co2' => 'decimal',
            'inv_salesman_com_am2' => 'decimal',
            'inv_salesman_pct_co3' => 'decimal',
            'inv_salesman_com_am3' => 'decimal',
        ];
    }
}
