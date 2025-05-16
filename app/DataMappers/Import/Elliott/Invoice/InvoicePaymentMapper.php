<?php

namespace App\DataMappers\Import\Elliott\Invoice;

use DateTime;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class InvoicePaymentMapper
{
    public static function mapInvoicePayment(array $rawData): array
    {
        return [
            'inv_no'               => Arr::get($rawData, 'inv_no'),
            'inv_profit_center'    => Arr::get($rawData, 'inv_profit_center'),
            'inv_tot_sale_amt'     => Arr::get($rawData, 'inv_tot_sale_amt'),
            'inv_tot_cost'         => Arr::get($rawData, 'inv_tot_cost'),
            'inv_tot_weight'       => Arr::get($rawData, 'inv_tot_weight'),
            'inv_misc_chg_amt'     => Arr::get($rawData, 'inv_misc_chg_amt'),
            'inv_misc_chg_acct_no' => Arr::get($rawData, 'inv_misc_chg_acct_no'),
            'inv_payment_amt'      => Arr::get($rawData, 'inv_payment_amt'),
            'inv_payment_disc_amt' => Arr::get($rawData, 'inv_payment_disc_amt'),
            'inv_check_no'         => Arr::get($rawData, 'inv_check_no'),
            'inv_check_date'       => self::parseDate(Arr::get($rawData, 'inv_check_date')),
            'inv_cash_acct_no'     => Arr::get($rawData, 'inv_cash_acct_no'),
            'inv_payment_tp'       => Arr::get($rawData, 'inv_payment_tp'),
            'inv_full_pay_date'    => self::parseDate(Arr::get($rawData, 'inv_full_pay_date')),
            'inv_acc_misc_chg_amt' => Arr::get($rawData, 'inv_acc_misc_chg_amt'),
            'inv_acc_frt_amt'      => Arr::get($rawData, 'inv_acc_frt_amt'),
            'inv_comm_percent'     => Arr::get($rawData, 'inv_comm_percent'),
            'inv_comm_amount'      => Arr::get($rawData, 'inv_comm_amount'),
            'inv_comment1'         => Arr::get($rawData, 'inv_comment1'),
            'inv_comment2'         => Arr::get($rawData, 'inv_comment2'),
            'inv_comment3'         => Arr::get($rawData, 'inv_comment3'),
            'created_at'           => now(),
            'updated_at'           => now(),
        ];
    }

    public static function insertMappedPaymentData(array $mappedData): bool
    {
        return DB::table('invoice_payments')->insert($mappedData);
    }

    protected static function parseDate($dateStr): DateTime|string|null
    {
        // \Log::info('dateStr: ' . $dateStr);
        return ($dateStr && strlen(strtok($dateStr, '.')) == 8 ) ?
            DateTime::createFromFormat('Ymd', strtok($dateStr, '.'))
                ->format('Y-m-d')
            : null;
    }
}
