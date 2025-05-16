<?php

namespace App\DataMappers\Import\Elliott\Invoice;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class InvoiceEdiMapper
{
    public static function mapInvoiceEdi(array $rawData): array
    {
        return [
            'inv_no'             => Arr::get($rawData, 'inv_no'),
            'inv_edi_fg'         => Arr::get($rawData, 'inv_edi_fg'),
            'inv_edi_po_no_cont' => Arr::get($rawData, 'inv_edi_po_no_cont'),
            'inv_edi_exp_flg'    => Arr::get($rawData, 'inv_edi_exp_flg'),
            'created_at'         => now(),
            'updated_at'         => now(),
        ];
    }

    public static function insertMappedEdiData(array $mappedData): bool
    {
        return DB::table('invoice_edis')->insert($mappedData);
    }
}
