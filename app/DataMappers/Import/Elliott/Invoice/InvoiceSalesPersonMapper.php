<?php

namespace App\DataMappers\Import\Elliott\Invoice;

use DateTime;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class InvoiceSalesPersonMapper
{
    public static function mapInvoiceSalesPerson(array $rawData): array
    {
        return [
            'inv_no'               => Arr::get($rawData, 'inv_no'),
            'inv_salesman_no1'     => Arr::get($rawData, 'inv_salesman_no1'),
            'inv_salesman_pct_co1' => Arr::get($rawData, 'inv_salesman_pct_co1'),
            'inv_salesman_com_am1' => Arr::get($rawData, 'inv_salesman_com_am1'),
            'inv_salesman_no2'     => Arr::get($rawData, 'inv_salesman_no2'),
            'inv_salesman_pct_co2' => Arr::get($rawData, 'inv_salesman_pct_co2'),
            'inv_salesman_com_am2' => Arr::get($rawData, 'inv_salesman_com_am2'),
            'inv_salesman_no3'     => Arr::get($rawData, 'inv_salesman_no3'),
            'inv_salesman_pct_co3' => Arr::get($rawData, 'inv_salesman_pct_co3'),
            'inv_salesman_com_am3' => Arr::get($rawData, 'inv_salesman_com_am3'),
            'created_at'           => now(),
            'updated_at'           => now(),
        ];
    }

    public static function insertMappedSalesPersonData(array $mappedData): bool
    {
        return DB::table('invoice_sales_people')->insert($mappedData);
    }
}
