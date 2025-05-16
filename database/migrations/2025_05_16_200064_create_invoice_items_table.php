<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('invoice_items', function (Blueprint $table) {
            $table->id();
            $table->string('inv_itm_inv_no');
            $table->integer('inv_itm_seq_no');
            $table->string('inv_itm_itm_no');
            $table->date('inv_itm_inv_date');
            $table->string('inv_itm_cust_no');
            $table->string('inv_itm_itm_no_alt')->nullable();
            $table->date('inv_itm_inv_date_alt')->nullable();
            $table->text('inv_itm_desc_1')->nullable();
            $table->text('inv_itm_desc_2')->nullable();
            $table->string('inv_itm_ser_lot_no')->nullable();
            $table->date('inv_itm_ser_eff_date')->nullable();
            $table->decimal('inv_itm_unit_price')->nullable();
            $table->decimal('inv_itm_discount_pct')->nullable();
            $table->date('inv_itm_request_date')->nullable();
            $table->string('inv_itm_uom')->nullable();
            $table->decimal('inv_itm_unit_cost')->nullable();
            $table->decimal('inv_itm_unit_weight')->nullable();
            $table->decimal('inv_itm_comm_p_o_amt')->nullable();
            $table->date('inv_itm_promise_date')->nullable();
            $table->string('inv_itm_select_code')->nullable();
            $table->string('inv_itm_explode_kit')->nullable();
            $table->string('inv_itm_bm_order_no')->nullable();
            $table->string('inv_itm_no_package')->nullable();
            $table->integer('inv_itm_po_xrf_seqno')->nullable();
            $table->string('inv_itm_prod_cate')->nullable();
            $table->string('inv_itm_reason_code')->nullable();
            $table->string('inv_itm_prc_lvl_no')->nullable();
            $table->string('inv_itm_vendor_no')->nullable();
            $table->string('inv_itm_edi_turnarnd')->nullable();
            $table->string('inv_itm_cancel_cls')->nullable();
            $table->string('inv_itm_bm_ord_tp')->nullable();
            $table->string('inv_itm_custom_bom')->nullable();
            $table->string('inv_itm_case_size')->nullable();
            $table->string('inv_itm_inner_size')->nullable();
            $table->foreignId('invoice_header_id')->constrained('invoice_headers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_items');
    }
};
