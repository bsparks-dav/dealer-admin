<?php

namespace App\Services\Elliott;

use Illuminate\Support\Facades\DB;

class InvoiceImporter
{
    protected static string $db_conn = 'mysql-1';

    public static function getNewInvoiceHeaders($cust_no): array
    {
        // $existing_inv_nos = self::getExistingInvoiceIds($cust_no);
        // $results = self::getExistingInvoices($cust_no);

        // $quoted_inv_nos = implode(',', array_map(fn($v) => '"' . $v . '"', $existing_inv_nos));

//        $results = DB::connection(self::$db_conn)->select('select * from CPINVHDR where
//                           INV_NO not in ('.$quoted_inv_nos.') && INV_CUSTOMER_NO = ? order by INV_NO desc', [$cust_no]);
          $results = DB::connection(self::$db_conn)->select('select * from CPINVHDR where INV_CUSTOMER_NO = ? order by INV_NO desc', [$cust_no]);
// dd($results);
        return self::transformData($results);
    }

    public static function getExistingInvoiceItems($cust_no): array
    {
        return DB::table('invoice_items')
            ->where('inv_itm_cust_no', $cust_no)
            ->distinct()
            ->orderBy('inv_itm_inv_no', 'desc')
            ->get()
            ->map(function($row) { return (array) $row; })
            ->toArray();
    }

    public static function getExistingInvoices($cust_no): array
    {
        return DB::table('invoice_headers')
            ->where('customer_id', $cust_no)
            ->distinct()
            ->orderBy('inv_no', 'desc')
            ->get()
            ->map(function($row) { return (array) $row; })
            ->toArray();
    }

    protected static function getExistingInvoiceIds($cust_no): array
    {
        // get existing inv_no values from the table to avoid duplicate data...
        return DB::table('invoice_headers')
            ->where('customer_id', $cust_no)
            ->distinct()
            ->orderBy('inv_no', 'desc')
            ->pluck('inv_no')
            ->toArray();
    }

    public static function getInvoiceDetails($cust_no): array
    {
        // $existing_inv_nos = self::getExistingInvoiceIds($cust_no);
        // hard-coded until Jake creates some indexes on these tables...
        $existing_inv_nos = ['DXR621', 'DXL676', 'DXG921', 'DXH572', 'DXG931', 'DXG927', 'DWX287', 'DWX278', 'DWV822', 'DWU939'];

        $quoted_inv_nos = implode(',', array_map(fn($v) => '"' . $v . '"', $existing_inv_nos));

        // $results = DB::connection(self::$db_conn)->select('select * from CPINVLIN  where INV_ITM_INV_NO IN ('.$quoted_inv_nos.') order by INV_ITM_INV_NO desc, INV_ITM_SEQ_NO');
        $results = DB::connection(self::$db_conn)->select('select * from CPINVLIN  where INV_ITM_CUST_NO = "'.$cust_no.'" order by INV_ITM_INV_NO desc, INV_ITM_SEQ_NO');

        return self::transformData($results);
    }

    protected static function transformData($results): array
    {
        return collect($results)
            ->map(function ($row) {
                return collect((array) $row)
                    ->mapWithKeys(fn($value, $key) => [strtolower($key) => trim($value)])
                    ->all();
            })
            ->all();
    }
}
