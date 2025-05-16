<?php

namespace App\DataMappers\Import\Elliott\InvoiceItem;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class InvoiceItemQtyMapper
{
    public static function mapInvoiceItemQty(array $rawData): array
    {
        return [
            'inv_itm_inv_no'       => Arr::get($rawData, 'inv_itm_inv_no'),
            'inv_itm_seq_no'       => Arr::get($rawData, 'inv_itm_seq_no'),
            'inv_itm_qty_order'    => Arr::get($rawData, 'inv_itm_qty_order'),
            'inv_itm_qty_to_ship'  => Arr::get($rawData, 'inv_itm_qty_to_ship'),
            'inv_itm_qty_back_ord' => Arr::get($rawData, 'inv_itm_qty_back_ord'),
            'inv_itm_qty_rt_to_st' => Arr::get($rawData, 'inv_itm_qty_rt_to_st'),
            'inv_itm_tot_qty_ord'  => Arr::get($rawData, 'inv_itm_tot_qty_ord'),
            'inv_itm_tot_qty_shp'  => Arr::get($rawData, 'inv_itm_tot_qty_shp'),
            'created_at'           => now(),
            'updated_at'           => now(),
        ];
    }

    public static function insertMappedInvItemQtyData(array $mappedData): bool
    {
        return DB::table('invoice_item_qties')->insert($mappedData);
    }

}
