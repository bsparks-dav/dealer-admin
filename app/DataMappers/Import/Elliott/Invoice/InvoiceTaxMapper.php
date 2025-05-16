<?php

namespace App\DataMappers\Import\Elliott\Invoice;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class InvoiceTaxMapper
{
    public static function mapInvoiceTax(array $rawData): array
    {
        return [
            'inv_no'              => Arr::get($rawData, 'inv_no'),
            'inv_tax_code_1'      => Arr::get($rawData, 'inv_tax_code_1'),
            'inv_tax_code_2'      => Arr::get($rawData, 'inv_tax_code_2'),
            'inv_tax_code_3'      => Arr::get($rawData, 'inv_tax_code_3'),
            'inv_tax_percent_1'   => Arr::get($rawData, 'inv_tax_percent_1'),
            'inv_tax_percent_2'   => Arr::get($rawData, 'inv_tax_percent_2'),
            'inv_tax_percent_3'   => Arr::get($rawData, 'inv_tax_percent_3'),
            'inv_sales_tax_amt_1' => Arr::get($rawData, 'inv_sales_tax_amt_1'),
            'inv_sales_tax_amt_2' => Arr::get($rawData, 'inv_sales_tax_amt_2'),
            'inv_sales_tax_amt_3' => Arr::get($rawData, 'inv_sales_tax_amt_3'),
            'inv_tot_tax_amt'     => Arr::get($rawData, 'inv_tot_tax_amt'),
            'inv_acc_tot_tax_amt' => Arr::get($rawData, 'inv_acc_tot_tax_amt'),
            'created_at'          => now(),
            'updated_at'          => now(),
        ];
    }

    public static function insertMappedTaxData(array $mappedData): bool
    {
        return DB::table('invoice_taxes')->insert($mappedData);
    }
}
