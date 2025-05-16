<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Customer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\CustomerController
 */
final class CustomerControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    #[Test]
    public function index_displays_view(): void
    {
        $customers = Customer::factory()->count(3)->create();

        $response = $this->get(route('customers.index'));

        $response->assertOk();
        $response->assertViewIs('customer.index');
        $response->assertViewHas('customers');
    }


    #[Test]
    public function create_displays_view(): void
    {
        $response = $this->get(route('customers.create'));

        $response->assertOk();
        $response->assertViewIs('customer.create');
    }


    #[Test]
    public function store_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\CustomerController::class,
            'store',
            \App\Http\Requests\CustomerStoreRequest::class
        );
    }

    #[Test]
    public function store_saves_and_redirects(): void
    {
        $cus_no = fake()->word();

        $response = $this->post(route('customers.store'), [
            'cus_no' => $cus_no,
        ]);

        $customers = Customer::query()
            ->where('cus_no', $cus_no)
            ->get();
        $this->assertCount(1, $customers);
        $customer = $customers->first();

        $response->assertRedirect(route('customers.index'));
        $response->assertSessionHas('customer.id', $customer->id);
    }


    #[Test]
    public function show_displays_view(): void
    {
        $customer = Customer::factory()->create();

        $response = $this->get(route('customers.show', $customer));

        $response->assertOk();
        $response->assertViewIs('customer.show');
        $response->assertViewHas('customer');
    }


    #[Test]
    public function edit_displays_view(): void
    {
        $customer = Customer::factory()->create();

        $response = $this->get(route('customers.edit', $customer));

        $response->assertOk();
        $response->assertViewIs('customer.edit');
        $response->assertViewHas('customer');
    }


    #[Test]
    public function update_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\CustomerController::class,
            'update',
            \App\Http\Requests\CustomerUpdateRequest::class
        );
    }

    #[Test]
    public function update_redirects(): void
    {
        $customer = Customer::factory()->create();
        $cus_no = fake()->word();

        $response = $this->put(route('customers.update', $customer), [
            'cus_no' => $cus_no,
        ]);

        $customer->refresh();

        $response->assertRedirect(route('customers.index'));
        $response->assertSessionHas('customer.id', $customer->id);

        $this->assertEquals($cus_no, $customer->cus_no);
    }


    #[Test]
    public function destroy_deletes_and_redirects(): void
    {
        $customer = Customer::factory()->create();

        $response = $this->delete(route('customers.destroy', $customer));

        $response->assertRedirect(route('customers.index'));

        $this->assertModelMissing($customer);
    }
}
