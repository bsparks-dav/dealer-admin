<?php

namespace App\DataMappers\Import\Elliott\InvoiceItem;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class InvoiceItemOrgMapper
{
    public static function mapInvoiceItemOrg(array $rawData): array
    {
        return [
            'inv_itm_inv_no'        => Arr::get($rawData, 'inv_itm_inv_no'),
            'inv_itm_seq_no'        => Arr::get($rawData, 'inv_itm_seq_no'),
            'inv_itm_price_org'     => Arr::get($rawData, 'inv_itm_price_org'),
            'inv_itm_org_bk_ord_no' => Arr::get($rawData, 'inv_itm_org_bk_ord_no'),
            'inv_itm_org_bk_seqno'  => Arr::get($rawData, 'inv_itm_org_bk_seqno'),
            'inv_itm_org_itm_no'    => Arr::get($rawData, 'inv_itm_org_itm_no'),
            'created_at'            => now(),
            'updated_at'            => now(),
        ];
    }

    public static function insertMappedInvItemOrgData(array $mappedData): bool
    {
        return DB::table('invoice_item_orgs')->insert($mappedData);
    }

}
