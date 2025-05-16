<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerAmtAge extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cus_no',
        'cus_amt_age_pd1',
        'cus_amt_age_pd2',
        'cus_amt_age_pd3',
        'cus_amt_age_pd4',
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
            'cus_amt_age_pd1' => 'decimal',
            'cus_amt_age_pd2' => 'decimal',
            'cus_amt_age_pd3' => 'decimal',
            'cus_amt_age_pd4' => 'decimal',
        ];
    }
}
