<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerAccount extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cus_no',
        'cus_collector',
        'cus_order_loc',
        'cus_terr',
        'cus_ar_acct_no',
        'cus_ship_via_cd',
        'cus_ups_zone',
        'cus_terms_cd',
        'cus_user_date',
        'cus_user_amt',
        'cus_exempt_exp_date',
        'cus_exempt_reason_cd',
        'cus_bill_to_no',
        'cus_form_no',
        'cus_slm_start_dt',
        'cus_abc_class',
        'cus_frt_pay_code',
        'cus_del_lead_time',
        'cus_pick_inv_amt',
        'cus_del_day_erly_alw',
        'cus_access_date',
        'cus_access_time',
        'cus_transfer_to_loc',
        'cus_transit_days',
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
            'cus_user_date' => 'date',
            'cus_user_amt' => 'decimal',
            'cus_exempt_exp_date' => 'date',
            'cus_slm_start_dt' => 'date',
            'cus_pick_inv_amt' => 'date',
            'cus_access_date' => 'date',
            'cus_access_time' => 'datetime',
        ];
    }
}
