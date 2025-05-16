<?php

namespace App\DataMappers\Import\Elliott\Invoice;

use DateTime;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class InvoiceShipToMapper
{
    public static function mapInvoiceShipTo(array $rawData): array
    {
        return [
            'inv_no'               => Arr::get($rawData, 'inv_no'),
            'inv_ship_to_no'       => Arr::get($rawData, 'inv_ship_to_no'),
            'inv_ship_to_name'     => Arr::get($rawData, 'inv_ship_to_name'),
            'inv_ship_to_addr_1'   => Arr::get($rawData, 'inv_ship_to_addr_1'),
            'inv_ship_to_addr_2'   => Arr::get($rawData, 'inv_ship_to_addr_2'),
            'inv_ship_to_city'     => Arr::get($rawData, 'inv_ship_to_city'),
            'inv_ship_to_st'       => Arr::get($rawData, 'inv_ship_to_st'),
            'inv_ship_to_zipcd'    => Arr::get($rawData, 'inv_ship_to_zipcd'),
            'inv_ship_to_country'  => Arr::get($rawData, 'inv_ship_to_country'),
            'ship_to_filler1'      => Arr::get($rawData, 'ship_to_filler1'),
            'ship_to_filler2'      => Arr::get($rawData, 'ship_to_filler2'),
            'inv_shipping_date'    => self::parseDate(Arr::get($rawData, 'inv_shipping_date')),
            'inv_ship_via_code'    => Arr::get($rawData, 'inv_ship_via_code'),
            'inv_ship_instruct1'   => Arr::get($rawData, 'inv_ship_instruct1'),
            'inv_ship_instruct2'   => Arr::get($rawData, 'inv_ship_instruct2'),
            'inv_ship_to_fr_fo_fg' => Arr::get($rawData, 'inv_ship_to_fr_fo_fg'),
            'inv_frt_amt'          => Arr::get($rawData, 'inv_frt_amt'),
            'inv_frt_acct_no'      => Arr::get($rawData, 'inv_frt_acct_no'),
            'created_at'           => now(),
            'updated_at'           => now(),
        ];
    }

    public static function insertMappedShipToData(array $mappedData): bool
    {
        return DB::table('invoice_ship_tos')->insert($mappedData);
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
