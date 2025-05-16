<?php

namespace App\DataMappers\Import\Elliott\Invoice;

use App\Models\InvoiceHeader;
use DateTime;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class InvoiceHeaderMapper
{
    /**
     * Map raw ERP invoiceHeader data to an Eloquent Invoice model's attributes.
     *
     * @param array $rawData
     * @return array
     */
    public static function mapInvoiceHeader(array $rawData): array
    {
        return [
            'inv_no'               => Arr::get($rawData, 'inv_no'),
            'inv_order_no'         => Arr::get($rawData, 'inv_order_no'),
            'inv_customer_no'      => Arr::get($rawData, 'inv_customer_no'),
            'inv_date'             => self::parseDate(Arr::get($rawData, 'inv_date')),
            'inv_date_entered'     => self::parseDate(Arr::get($rawData, 'inv_date_entered')),
            'inv_order_date'       => self::parseDate(Arr::get($rawData, 'inv_order_date')),
            'inv_type'             => Arr::get($rawData, 'inv_type'),
            'inv_apply_to_no'      => Arr::get($rawData, 'inv_apply_to_no'),
            'inv_purchase_ord_no'  => Arr::get($rawData, 'inv_purchase_ord_no'),
            'inv_no_alt'           => Arr::get($rawData, 'inv_no_alt'),
            'inv_cust_bal_method'  => Arr::get($rawData, 'inv_cust_bal_method'),
            'inv_terms_code'       => Arr::get($rawData, 'inv_terms_code'),
            'inv_frt_pay_code'     => Arr::get($rawData, 'inv_frt_pay_code'),
            'inv_discount_percent' => Arr::get($rawData, 'inv_discount_percent'),
            'inv_job_no'           => Arr::get($rawData, 'inv_job_no'),
            'inv_mfg_location'     => Arr::get($rawData, 'inv_mfg_location'),
            'inv_department'       => Arr::get($rawData, 'inv_department'),
            'inv_ar_reference'     => Arr::get($rawData, 'inv_ar_reference'),
            'inv_date_picked'      => self::parseDate(Arr::get($rawData, 'inv_date_picked')),
            'inv_selection_code'   => Arr::get($rawData, 'inv_selection_code'),
            'inv_posted_date'      => self::parseDate(Arr::get($rawData, 'inv_posted_date')),
            'inv_part_posted_flag' => Arr::get($rawData, 'inv_part_posted_flag'),
            'inv_copy_to_bm_fg'    => Arr::get($rawData, 'inv_copy_to_bm_fg'),
            'inv_closed_fg'        => Arr::get($rawData, 'inv_closed_fg'),
            'inv_store_no'         => Arr::get($rawData, 'inv_store_no'),
            'inv_rma_status'       => Arr::get($rawData, 'inv_rma_status'),
            'inv_phatm_inv_flag'   => Arr::get($rawData, 'inv_phatm_inv_flag'),
            'inv_dept_no'          => Arr::get($rawData, 'inv_dept_no'),
            'inv_bol_no'           => Arr::get($rawData, 'inv_bol_no'),
            'inv_bol_printed'      => Arr::get($rawData, 'inv_bol_printed'),
            'inv_ref_doc_no'       => Arr::get($rawData, 'inv_ref_doc_no'),
            'inv_po_req_gen_flg'   => Arr::get($rawData, 'inv_po_req_gen_flg'),
            'customer_id'          => Arr::get($rawData, 'inv_customer_no'),
            'created_at'           => now(),
            'updated_at'           => now(),
        ];
    }

    public static function insertMappedData(array $mappedData): bool
    {
        return DB::table('invoice_headers')->insert($mappedData);
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
