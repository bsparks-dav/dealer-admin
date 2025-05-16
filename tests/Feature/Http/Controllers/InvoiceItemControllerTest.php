<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\InvoiceHeader;
use App\Models\InvoiceItem;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Carbon;
use JMac\Testing\Traits\AdditionalAssertions;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\InvoiceItemController
 */
final class InvoiceItemControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    #[Test]
    public function index_displays_view(): void
    {
        $invoiceItems = InvoiceItem::factory()->count(3)->create();

        $response = $this->get(route('invoice-items.index'));

        $response->assertOk();
        $response->assertViewIs('invoiceItem.index');
        $response->assertViewHas('invoiceItems');
    }


    #[Test]
    public function create_displays_view(): void
    {
        $response = $this->get(route('invoice-items.create'));

        $response->assertOk();
        $response->assertViewIs('invoiceItem.create');
    }


    #[Test]
    public function store_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\InvoiceItemController::class,
            'store',
            \App\Http\Requests\InvoiceItemStoreRequest::class
        );
    }

    #[Test]
    public function store_saves_and_redirects(): void
    {
        $inv_itm_inv_no = fake()->word();
        $inv_itm_seq_no = fake()->numberBetween(-10000, 10000);
        $inv_itm_inv_date = Carbon::parse(fake()->date());
        $inv_itm_cust_no = fake()->word();
        $invoice_header = InvoiceHeader::factory()->create();

        $response = $this->post(route('invoice-items.store'), [
            'inv_itm_inv_no' => $inv_itm_inv_no,
            'inv_itm_seq_no' => $inv_itm_seq_no,
            'inv_itm_inv_date' => $inv_itm_inv_date->toDateString(),
            'inv_itm_cust_no' => $inv_itm_cust_no,
            'invoice_header_id' => $invoice_header->id,
        ]);

        $invoiceItems = InvoiceItem::query()
            ->where('inv_itm_inv_no', $inv_itm_inv_no)
            ->where('inv_itm_seq_no', $inv_itm_seq_no)
            ->where('inv_itm_inv_date', $inv_itm_inv_date)
            ->where('inv_itm_cust_no', $inv_itm_cust_no)
            ->where('invoice_header_id', $invoice_header->id)
            ->get();
        $this->assertCount(1, $invoiceItems);
        $invoiceItem = $invoiceItems->first();

        $response->assertRedirect(route('invoiceItems.index'));
        $response->assertSessionHas('invoiceItem.id', $invoiceItem->id);
    }


    #[Test]
    public function show_displays_view(): void
    {
        $invoiceItem = InvoiceItem::factory()->create();

        $response = $this->get(route('invoice-items.show', $invoiceItem));

        $response->assertOk();
        $response->assertViewIs('invoiceItem.show');
        $response->assertViewHas('invoiceItem');
    }


    #[Test]
    public function edit_displays_view(): void
    {
        $invoiceItem = InvoiceItem::factory()->create();

        $response = $this->get(route('invoice-items.edit', $invoiceItem));

        $response->assertOk();
        $response->assertViewIs('invoiceItem.edit');
        $response->assertViewHas('invoiceItem');
    }


    #[Test]
    public function update_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\InvoiceItemController::class,
            'update',
            \App\Http\Requests\InvoiceItemUpdateRequest::class
        );
    }

    #[Test]
    public function update_redirects(): void
    {
        $invoiceItem = InvoiceItem::factory()->create();
        $inv_itm_inv_no = fake()->word();
        $inv_itm_seq_no = fake()->numberBetween(-10000, 10000);
        $inv_itm_inv_date = Carbon::parse(fake()->date());
        $inv_itm_cust_no = fake()->word();
        $invoice_header = InvoiceHeader::factory()->create();

        $response = $this->put(route('invoice-items.update', $invoiceItem), [
            'inv_itm_inv_no' => $inv_itm_inv_no,
            'inv_itm_seq_no' => $inv_itm_seq_no,
            'inv_itm_inv_date' => $inv_itm_inv_date->toDateString(),
            'inv_itm_cust_no' => $inv_itm_cust_no,
            'invoice_header_id' => $invoice_header->id,
        ]);

        $invoiceItem->refresh();

        $response->assertRedirect(route('invoiceItems.index'));
        $response->assertSessionHas('invoiceItem.id', $invoiceItem->id);

        $this->assertEquals($inv_itm_inv_no, $invoiceItem->inv_itm_inv_no);
        $this->assertEquals($inv_itm_seq_no, $invoiceItem->inv_itm_seq_no);
        $this->assertEquals($inv_itm_inv_date, $invoiceItem->inv_itm_inv_date);
        $this->assertEquals($inv_itm_cust_no, $invoiceItem->inv_itm_cust_no);
        $this->assertEquals($invoice_header->id, $invoiceItem->invoice_header_id);
    }


    #[Test]
    public function destroy_deletes_and_redirects(): void
    {
        $invoiceItem = InvoiceItem::factory()->create();

        $response = $this->delete(route('invoice-items.destroy', $invoiceItem));

        $response->assertRedirect(route('invoiceItems.index'));

        $this->assertModelMissing($invoiceItem);
    }
}
