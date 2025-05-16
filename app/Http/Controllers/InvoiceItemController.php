<?php

namespace App\Http\Controllers;

use App\Http\Requests\InvoiceItemStoreRequest;
use App\Http\Requests\InvoiceItemUpdateRequest;
use App\Models\InvoiceItem;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class InvoiceItemController extends Controller
{
    public function index(Request $request): View
    {
        $invoiceItems = InvoiceItem::all();

        return view('invoiceItem.index', [
            'invoiceItems' => $invoiceItems,
        ]);
    }

    public function create(Request $request): View
    {
        return view('invoiceItem.create');
    }

    public function store(InvoiceItemStoreRequest $request): RedirectResponse
    {
        $invoiceItem = InvoiceItem::create($request->validated());

        $request->session()->flash('invoiceItem.id', $invoiceItem->id);

        return redirect()->route('invoiceItems.index');
    }

    public function show(Request $request, InvoiceItem $invoiceItem): View
    {
        return view('invoiceItem.show', [
            'invoiceItem' => $invoiceItem,
        ]);
    }

    public function edit(Request $request, InvoiceItem $invoiceItem): View
    {
        return view('invoiceItem.edit', [
            'invoiceItem' => $invoiceItem,
        ]);
    }

    public function update(InvoiceItemUpdateRequest $request, InvoiceItem $invoiceItem): RedirectResponse
    {
        $invoiceItem->update($request->validated());

        $request->session()->flash('invoiceItem.id', $invoiceItem->id);

        return redirect()->route('invoiceItems.index');
    }

    public function destroy(Request $request, InvoiceItem $invoiceItem): RedirectResponse
    {
        $invoiceItem->delete();

        return redirect()->route('invoiceItems.index');
    }
}
