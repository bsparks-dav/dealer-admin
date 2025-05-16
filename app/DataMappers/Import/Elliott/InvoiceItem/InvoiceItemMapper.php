<?php

namespace App\DataMappers\Import\Elliott\InvoiceItem;

use App\Models\InvoiceHeader;
use DateTime;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class InvoiceItemMapper
{
    public static function mapInvoiceItem(array $rawData): array
    {
        $invoiceHeader = InvoiceHeader::where('inv_no', Arr::get($rawData, 'inv_itm_inv_no'))->first();

        return [
            'inv_itm_inv_no'       => Arr::get($rawData, 'inv_itm_inv_no'),
            'inv_itm_seq_no'       => Arr::get($rawData, 'inv_itm_seq_no'),
            'inv_itm_itm_no'       => Arr::get($rawData, 'inv_itm_itm_no'),
            'inv_itm_inv_date'     => self::parseDate(Arr::get($rawData, 'inv_itm_inv_date')),
            'inv_itm_cust_no'      => Arr::get($rawData, 'inv_itm_cust_no'),
            'inv_itm_itm_no_alt'   => Arr::get($rawData, 'inv_itm_itm_no_alt'),
            'inv_itm_desc_1'       => Arr::get($rawData, 'inv_itm_desc_1'),
            'inv_itm_desc_2'       => Arr::get($rawData, 'inv_itm_desc_2'),
            'inv_itm_ser_lot_no'   => Arr::get($rawData, 'inv_itm_ser_lot_no'),
            'inv_itm_ser_eff_date' => self::parseDate(Arr::get($rawData, 'inv_itm_ser_eff_date')),
            'inv_itm_unit_price'   => Arr::get($rawData, 'inv_itm_unit_price'),
            'inv_itm_discount_pct' => Arr::get($rawData, 'inv_itm_discount_pct'),
            'inv_itm_request_date' => self::parseDate(Arr::get($rawData, 'inv_itm_request_date')),
            'inv_itm_uom'          => Arr::get($rawData, 'inv_itm_uom'),
            'inv_itm_unit_cost'    => Arr::get($rawData, 'inv_itm_unit_cost'),
            'inv_itm_unit_weight'  => Arr::get($rawData, 'inv_itm_unit_weight'),
            'inv_itm_comm_p_o_amt' => Arr::get($rawData, 'inv_itm_comm_p_o_amt'),
            'inv_itm_promise_date' => self::parseDate(Arr::get($rawData, 'inv_itm_promise_date')),
            'inv_itm_select_code'  => Arr::get($rawData, 'inv_itm_select_code'),
            'inv_itm_explode_kit'  => Arr::get($rawData, 'inv_itm_explode_kit'),
            'inv_itm_bm_order_no'  => Arr::get($rawData, 'inv_itm_bm_order_no'),
            'inv_itm_no_package'   => Arr::get($rawData, 'inv_itm_no_package'),
            'inv_itm_po_xrf_seqno' => Arr::get($rawData, 'inv_itm_po_xrf_seqno'),
            'inv_itm_prod_cate'    => Arr::get($rawData, 'inv_itm_prod_cate'),
            'inv_itm_reason_code'  => Arr::get($rawData, 'inv_itm_reason_code'),
            'inv_itm_prc_lvl_no'   => Arr::get($rawData, 'inv_itm_prc_lvl_no'),
            'inv_itm_vendor_no'    => Arr::get($rawData, 'inv_itm_vendor_no'),
            'inv_itm_edi_turnarnd' => Arr::get($rawData, 'inv_itm_edi_turnarnd'),
            'inv_itm_cancel_cls'   => Arr::get($rawData, 'inv_itm_cancel_cls'),
            'inv_itm_bm_ord_tp'    => Arr::get($rawData, 'inv_itm_bm_ord_tp'),
            'inv_itm_custom_bom'   => Arr::get($rawData, 'inv_itm_custom_bom'),
            'inv_itm_case_size'    => Arr::get($rawData, 'inv_itm_case_size'),
            'inv_itm_inner_size'   => Arr::get($rawData, 'inv_itm_inner_size'),
            'invoice_header_id'    => $invoiceHeader->id,
            'created_at'           => now(),
            'updated_at'           => now(),
        ];
    }

    public static function insertMappedInvItemData(array $mappedData): bool
    {
        return DB::table('invoice_items')->insert($mappedData);
    }

    protected static function parseDate($dateStr): DateTime|string|null
    {
        // \Log::info('dateStr: ' . $dateStr);
        return ($dateStr && $dateStr != '0000-00-00' ) ?
            DateTime::createFromFormat('Y-m-d', $dateStr)->format('Y-m-d') : null;
    }
}
