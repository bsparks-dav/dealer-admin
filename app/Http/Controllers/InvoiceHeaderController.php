<?php

namespace App\Http\Controllers;

use App\Http\Requests\InvoiceHeaderStoreRequest;
use App\Http\Requests\InvoiceHeaderUpdateRequest;
use App\Models\InvoiceHeader;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class InvoiceHeaderController extends Controller
{
//    public function index(Request $request): View
//    {
//       //  $invoiceHeaders = InvoiceHeader::with('edi')->get(); // eager loading. avoid N+1 queries...
//
//        $invoiceHeaders = InvoiceHeader::query()
//            ->join('invoice_edis', 'invoice_edis.inv_no', '=', 'invoice_headers.inv_no')
//            ->select('invoice_headers.*', 'invoice_edis.inv_edi_po_no_cont as edi.inv_edi_po_no_cont')
//            ->get();
//
//        return view('invoiceHeader.index', [
//            'invoiceHeaders' => $invoiceHeaders,
//        ]);
//    }

    public function create(Request $request): View
    {
        return view('invoiceHeader.create');
    }

    public function store(InvoiceHeaderStoreRequest $request): RedirectResponse
    {
        $invoiceHeader = InvoiceHeader::create($request->validated());

        $request->session()->flash('invoiceHeader.id', $invoiceHeader->id);

        return redirect()->route('invoiceHeaders.index');
    }

    public function show(Request $request, InvoiceHeader $invoiceHeader): View
    {
        return view('invoiceHeader.show', [
            'invoiceHeader' => $invoiceHeader,
        ]);
    }

    public function edit(Request $request, InvoiceHeader $invoiceHeader): View
    {
        return view('invoiceHeader.edit', [
            'invoiceHeader' => $invoiceHeader,
        ]);
    }

    public function update(InvoiceHeaderUpdateRequest $request, InvoiceHeader $invoiceHeader): RedirectResponse
    {
        $invoiceHeader->update($request->validated());

        $request->session()->flash('invoiceHeader.id', $invoiceHeader->id);

        return redirect()->route('invoiceHeaders.index');
    }

    public function destroy(Request $request, InvoiceHeader $invoiceHeader): RedirectResponse
    {
        $invoiceHeader->delete();

        return redirect()->route('invoiceHeaders.index');
    }
}
