<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceTax extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'inv_no',
        'inv_tax_code_1',
        'inv_tax_code_2',
        'inv_tax_code_3',
        'inv_tax_percent_1',
        'inv_tax_percent_2',
        'inv_tax_percent_3',
        'inv_sales_tax_amt_1',
        'inv_sales_tax_amt_2',
        'inv_sales_tax_amt_3',
        'inv_tot_tax_amt',
        'inv_acc_tot_tax_amt',
        'inv_acc_sale_tax_amt',
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
            'inv_sales_tax_amt_1' => 'decimal',
            'inv_sales_tax_amt_2' => 'decimal',
            'inv_sales_tax_amt_3' => 'decimal',
            'inv_tot_tax_amt' => 'decimal',
            'inv_acc_tot_tax_amt' => 'decimal',
            'inv_acc_sale_tax_amt' => 'decimal',
        ];
    }
}
