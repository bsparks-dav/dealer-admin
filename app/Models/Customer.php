<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cus_no',
        'cus_name',
        'cus_corr_name',
        'cus_street1',
        'cus_street2',
        'cus_city',
        'cus_st',
        'cus_zip',
        'cus_country',
        'cus_geo_code',
        'cus_outside_city_lm',
        'cus_contact',
        'cus_phone_no',
        'cus_fax_number',
        'cus_start_dt',
        'cus_slm_no',
        'cus_tp',
        'cus_bal_meth',
        'cus_stm_freq',
        'cus_exempt_no',
        'cus_search_name',
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
            'cus_start_dt' => 'date',
        ];
    }

    public function invoiceHeaders(): HasMany
    {
        return $this->hasMany(InvoiceHeader::class);
    }
}
