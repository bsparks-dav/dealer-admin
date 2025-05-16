<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoicePayment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'inv_no',
        'inv_profit_center',
        'inv_tot_sale_amt',
        'inv_tot_cost',
        'inv_tot_weight',
        'inv_misc_chg_amt',
        'inv_misc_chg_acct_no',
        'inv_payment_amt',
        'inv_payment_disc_amt',
        'inv_check_no',
        'inv_check_date',
        'inv_cash_acct_no',
        'inv_payment_tp',
        'inv_full_pay_date',
        'inv_acc_misc_chg_amt',
        'inv_acc_frt_amt',
        'inv_acc_tot_sale_amt',
        'inv_comm_percent',
        'inv_comm_amount',
        'inv_comment1',
        'inv_comment2',
        'inv_comment3',
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
            'inv_tot_sale_amt' => 'decimal',
            'inv_tot_cost' => 'decimal',
            'inv_tot_weight' => 'decimal',
            'inv_misc_chg_amt' => 'decimal',
            'inv_payment_amt' => 'decimal',
            'inv_payment_disc_amt' => 'decimal',
            'inv_check_date' => 'date',
            'inv_full_pay_date' => 'date',
            'inv_acc_misc_chg_amt' => 'decimal',
            'inv_acc_frt_amt' => 'decimal',
            'inv_acc_tot_sale_amt' => 'decimal',
            'inv_comm_percent' => 'decimal',
            'inv_comm_amount' => 'decimal',
        ];
    }
}
