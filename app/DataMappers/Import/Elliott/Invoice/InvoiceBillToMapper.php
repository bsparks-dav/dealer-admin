<?php

namespace App\DataMappers\Import\Elliott\Invoice;

use DateTime;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class InvoiceBillToMapper
{
    public static function mapInvoiceBillTo(array $rawData): array
    {
        return [
            'inv_no'               => Arr::get($rawData, 'inv_no'),
            'inv_bill_to_no'       => Arr::get($rawData, 'inv_bill_to_no'),
            'inv_bill_to_name'     => Arr::get($rawData, 'inv_bill_to_name'),
            'inv_bill_to_addr_1'   => Arr::get($rawData, 'inv_bill_to_addr_1'),
            'inv_bill_to_addr_2'   => Arr::get($rawData, 'inv_bill_to_addr_2'),
            'inv_bill_to_city'     => Arr::get($rawData, 'inv_bill_to_city'),
            'inv_bill_to_st'       => Arr::get($rawData, 'inv_bill_to_st'),
            'inv_bill_to_zipcd'    => Arr::get($rawData, 'inv_bill_to_zipcd'),
            'inv_bill_to_country'  => Arr::get($rawData, 'inv_bill_to_country'),
            'bill_to_filler1'      => Arr::get($rawData, 'bill_to_filler1'),
            'bill_to_filler2'      => Arr::get($rawData, 'bill_to_filler2'),
            'inv_bill_to_fr_fo_fg' => Arr::get($rawData, 'inv_bill_to_fr_fo_fg'),
            'inv_date_billed'      => self::parseDate(Arr::get($rawData, 'inv_date_billed')),
            'created_at'           => now(),
            'updated_at'           => now(),
        ];
    }

    public static function insertMappedBillToData(array $mappedData): bool
    {
        return DB::table('invoice_bill_tos')->insert($mappedData);
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
