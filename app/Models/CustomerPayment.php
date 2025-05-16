<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerPayment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cus_no',
        'cus_last_pay_dt',
        'cus_last_pay_amt',
        'cus_avg_pay_ytd',
        'cus_avg_pay_last_yr',
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
            'cus_last_pay_dt' => 'date',
            'cus_last_pay_amt' => 'decimal',
            'cus_avg_pay_ytd' => 'decimal',
            'cus_avg_pay_last_yr' => 'decimal',
        ];
    }
}
