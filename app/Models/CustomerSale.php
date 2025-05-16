<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerSale extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cus_no',
        'cus_sales_ptd',
        'cus_sales_ytd',
        'cus_sales_last_yr',
        'cus_sales_yr_bf_ly',
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
            'cus_sales_ptd' => 'decimal',
            'cus_sales_ytd' => 'decimal',
            'cus_sales_last_yr' => 'decimal',
            'cus_sales_yr_bf_ly' => 'decimal',
        ];
    }
}
