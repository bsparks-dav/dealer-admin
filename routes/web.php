<?php

use App\DataMappers\Import\Elliott\Invoice\InvoiceBillToMapper;
use App\DataMappers\Import\Elliott\Invoice\InvoiceEdiMapper;
use App\DataMappers\Import\Elliott\Invoice\InvoiceHeaderMapper;
use App\DataMappers\Import\Elliott\Invoice\InvoicePaymentMapper;
use App\DataMappers\Import\Elliott\Invoice\InvoiceSalesPersonMapper;
use App\DataMappers\Import\Elliott\Invoice\InvoiceShipToMapper;
use App\DataMappers\Import\Elliott\Invoice\InvoiceTaxMapper;
use App\DataMappers\Import\Elliott\InvoiceItem\InvoiceItemFlagMapper;
use App\DataMappers\Import\Elliott\InvoiceItem\InvoiceItemMapper;
use App\DataMappers\Import\Elliott\InvoiceItem\InvoiceItemOrgMapper;
use App\DataMappers\Import\Elliott\InvoiceItem\InvoiceItemQtyMapper;
use App\Services\Elliott\InvoiceImporter;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/test', function () {

    $cust_no = '777777';

    $data = InvoiceImporter::getNewInvoiceHeaders($cust_no);
    // $data = InvoiceImporter::getExistingInvoices($cust_no);

    // $data = InvoiceImporter::getInvoiceDetails($cust_no);
    // $data = InvoiceImporter::getExistingInvoiceItems($cust_no);

 //dd($data);
    $inv_hdr_rows = [];
    // $inv_line_rows = [];
    $edi_rows = [];
    $payment_rows = [];
    $bill_to_rows = [];
    $ship_to_rows = [];
    $sales_person_rows = [];
    $tax_rows = [];
    $inv_item_rows = [];

    $inv_item_orgs = [];
    $inv_item_qty = [];
    $inv_item_flags = [];

    foreach ($data as $row) {
        $inv_hdr_rows[] = InvoiceHeaderMapper::mapInvoiceHeader($row);
        $edi_rows[] = InvoiceEdiMapper::mapInvoiceEdi($row);
        $payment_rows[] = InvoicePaymentMapper::mapInvoicePayment($row);
        $bill_to_rows[] = InvoiceBillToMapper::mapInvoiceBillTo($row);
        $ship_to_rows[] = InvoiceShipToMapper::mapInvoiceShipTo($row);
        $sales_person_rows[] = InvoiceSalesPersonMapper::mapInvoiceSalesPerson($row);
        $tax_rows[] = InvoiceTaxMapper::mapInvoiceTax($row);
//        $inv_item_rows[] = InvoiceItemMapper::mapInvoiceItem($row);
        // $inv_item_orgs[] = InvoiceItemOrgMapper::mapInvoiceItemOrg($row);
        // $inv_item_qty[] = InvoiceItemQtyMapper::mapInvoiceItemQty($row);
        // $inv_item_flags[] = InvoiceItemFlagMapper::mapInvoiceItemFlag($row);

    }
// dd($bill_to_rows);
    // insert rows. let's start the insanity...
    $bool = InvoiceHeaderMapper::insertMappedData($inv_hdr_rows);
    $bool1 = InvoiceEdiMapper::insertMappedEdiData($edi_rows);
    $bool2 = InvoicePaymentMapper::insertMappedPaymentData($payment_rows);
    $bool3 = InvoiceBillToMapper::insertMappedBillToData($bill_to_rows);
    $bool4 = InvoiceShipToMapper::insertMappedShipToData($ship_to_rows);
    $bool5 = InvoiceSalesPersonMapper::insertMappedSalesPersonData($sales_person_rows);
    $bool6 = InvoiceTaxMapper::insertMappedTaxData($tax_rows);
//    $invoiceItemFlagBool = InvoiceItemFlagMapper::insertMappedInvItemFlagData($inv_item_flags);
dd('Invoice headers done. '. $bool6);


});



//Route::resource('customers', App\Http\Controllers\CustomerController::class);
//
//Route::resource('invoice-headers', App\Http\Controllers\InvoiceHeaderController::class);
//
//Route::resource('invoice-items', App\Http\Controllers\InvoiceItemController::class);
//
//
//Route::resource('customers', App\Http\Controllers\CustomerController::class);
//
//Route::resource('invoice-headers', App\Http\Controllers\InvoiceHeaderController::class);
//
//Route::resource('invoice-items', App\Http\Controllers\InvoiceItemController::class);
//
//
//Route::resource('customers', App\Http\Controllers\CustomerController::class);
//
//Route::resource('invoice-headers', App\Http\Controllers\InvoiceHeaderController::class);
//
//Route::resource('invoice-items', App\Http\Controllers\InvoiceItemController::class);
