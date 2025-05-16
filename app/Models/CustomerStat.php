<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerStat extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cus_no',
        'cus_cost_ptd',
        'cus_cost_ytd',
        'cus_cost_last_yr',
        'cus_dsc_pct',
        'cus_ytd_dsc_given',
        'cus_balance',
        'cus_high_balance',
        'cus_last_sale_dt',
        'cus_last_sale_amt',
        'cus_inv_ytd',
        'cus_inv_last_yr',
        'cus_paid_inv_ytd',
        'cus_last_stm_age_dt',
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
            'cus_cost_ptd' => 'decimal',
            'cus_cost_ytd' => 'decimal',
            'cus_cost_last_yr' => 'decimal',
            'cus_dsc_pct' => 'decimal',
            'cus_ytd_dsc_given' => 'decimal',
            'cus_balance' => 'decimal',
            'cus_high_balance' => 'decimal',
            'cus_last_sale_dt' => 'date',
            'cus_last_sale_amt' => 'decimal',
            'cus_inv_ytd' => 'decimal',
            'cus_inv_last_yr' => 'decimal',
            'cus_paid_inv_ytd' => 'decimal',
            'cus_last_stm_age_dt' => 'date',
        ];
    }
}
