<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\InvoiceHeader;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Carbon;
use JMac\Testing\Traits\AdditionalAssertions;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\InvoiceHeaderController
 */
final class InvoiceHeaderControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    #[Test]
    public function index_displays_view(): void
    {
        $invoiceHeaders = InvoiceHeader::factory()->count(3)->create();

        $response = $this->get(route('invoice-headers.index'));

        $response->assertOk();
        $response->assertViewIs('invoiceHeader.index');
        $response->assertViewHas('invoiceHeaders');
    }


    #[Test]
    public function create_displays_view(): void
    {
        $response = $this->get(route('invoice-headers.create'));

        $response->assertOk();
        $response->assertViewIs('invoiceHeader.create');
    }


    #[Test]
    public function store_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\InvoiceHeaderController::class,
            'store',
            \App\Http\Requests\InvoiceHeaderStoreRequest::class
        );
    }

    #[Test]
    public function store_saves_and_redirects(): void
    {
        $inv_no = fake()->word();
        $inv_order_no = fake()->word();
        $inv_customer_no = fake()->word();
        $inv_date = Carbon::parse(fake()->date());

        $response = $this->post(route('invoice-headers.store'), [
            'inv_no' => $inv_no,
            'inv_order_no' => $inv_order_no,
            'inv_customer_no' => $inv_customer_no,
            'inv_date' => $inv_date->toDateString(),
        ]);

        $invoiceHeaders = InvoiceHeader::query()
            ->where('inv_no', $inv_no)
            ->where('inv_order_no', $inv_order_no)
            ->where('inv_customer_no', $inv_customer_no)
            ->where('inv_date', $inv_date)
            ->get();
        $this->assertCount(1, $invoiceHeaders);
        $invoiceHeader = $invoiceHeaders->first();

        $response->assertRedirect(route('invoiceHeaders.index'));
        $response->assertSessionHas('invoiceHeader.id', $invoiceHeader->id);
    }


    #[Test]
    public function show_displays_view(): void
    {
        $invoiceHeader = InvoiceHeader::factory()->create();

        $response = $this->get(route('invoice-headers.show', $invoiceHeader));

        $response->assertOk();
        $response->assertViewIs('invoiceHeader.show');
        $response->assertViewHas('invoiceHeader');
    }


    #[Test]
    public function edit_displays_view(): void
    {
        $invoiceHeader = InvoiceHeader::factory()->create();

        $response = $this->get(route('invoice-headers.edit', $invoiceHeader));

        $response->assertOk();
        $response->assertViewIs('invoiceHeader.edit');
        $response->assertViewHas('invoiceHeader');
    }


    #[Test]
    public function update_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\InvoiceHeaderController::class,
            'update',
            \App\Http\Requests\InvoiceHeaderUpdateRequest::class
        );
    }

    #[Test]
    public function update_redirects(): void
    {
        $invoiceHeader = InvoiceHeader::factory()->create();
        $inv_no = fake()->word();
        $inv_order_no = fake()->word();
        $inv_customer_no = fake()->word();
        $inv_date = Carbon::parse(fake()->date());

        $response = $this->put(route('invoice-headers.update', $invoiceHeader), [
            'inv_no' => $inv_no,
            'inv_order_no' => $inv_order_no,
            'inv_customer_no' => $inv_customer_no,
            'inv_date' => $inv_date->toDateString(),
        ]);

        $invoiceHeader->refresh();

        $response->assertRedirect(route('invoiceHeaders.index'));
        $response->assertSessionHas('invoiceHeader.id', $invoiceHeader->id);

        $this->assertEquals($inv_no, $invoiceHeader->inv_no);
        $this->assertEquals($inv_order_no, $invoiceHeader->inv_order_no);
        $this->assertEquals($inv_customer_no, $invoiceHeader->inv_customer_no);
        $this->assertEquals($inv_date, $invoiceHeader->inv_date);
    }


    #[Test]
    public function destroy_deletes_and_redirects(): void
    {
        $invoiceHeader = InvoiceHeader::factory()->create();

        $response = $this->delete(route('invoice-headers.destroy', $invoiceHeader));

        $response->assertRedirect(route('invoiceHeaders.index'));

        $this->assertModelMissing($invoiceHeader);
    }
}
