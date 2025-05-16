<?php

namespace App\DataMappers\Import\Elliott\InvoiceItem;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class InvoiceItemFlagMapper
{
    public static function mapInvoiceItemFlag(array $rawData): array
    {
        return [
            'inv_itm_inv_no'         => Arr::get($rawData, 'inv_itm_inv_no'),
            'inv_itm_seq_no'         => Arr::get($rawData, 'inv_itm_seq_no'),
            'inv_itm_tax_flag_1'     => Arr::get($rawData, 'inv_itm_tax_flag_1'),
            'inv_itm_tax_flag_2'     => Arr::get($rawData, 'inv_itm_tax_flag_2'),
            'inv_itm_tax_flag_3'     => Arr::get($rawData, 'inv_itm_tax_flag_3'),
            'inv_itm_back_flag'      => Arr::get($rawData, 'inv_itm_back_flag'),
            'inv_itm_comm_calc_flag' => Arr::get($rawData, 'inv_itm_comm_calc_flag'),
            'inv_itm_taxable_flag'   => Arr::get($rawData, 'inv_itm_taxable_flag'),
            'inv_itm_stocked_flag'   => Arr::get($rawData, 'inv_itm_stocked_flag'),
            'inv_itm_control_flag'   => Arr::get($rawData, 'inv_itm_control_flag'),
            'inv_itm_mult_ftr_flg'   => Arr::get($rawData, 'inv_itm_mult_ftr_flg'),
            'inv_itm_price_flag'     => Arr::get($rawData, 'inv_itm_price_flag'),
            'inv_itm_sty_tmp_flag'   => Arr::get($rawData, 'inv_itm_sty_tmp_flag'),
            'inv_itm_cpy_to_bm_fg'   => Arr::get($rawData, 'inv_itm_cpy_to_bm_fg'),
            'created_at'             => now(),
            'updated_at'             => now(),
        ];
    }

    public static function insertMappedInvItemFlagData(array $mappedData): bool
    {
        return DB::table('invoice_item_flags')->insert($mappedData);
    }

}
