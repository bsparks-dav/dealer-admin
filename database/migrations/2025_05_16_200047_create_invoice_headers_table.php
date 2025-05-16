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
        Schema::create('invoice_headers', function (Blueprint $table) {
            $table->id();
            $table->string('inv_no');
            $table->string('inv_order_no')->nullable();
            $table->string('inv_customer_no')->nullable();
            $table->date('inv_date')->nullable();
            $table->date('inv_date_entered')->nullable();
            $table->date('inv_order_date')->nullable();
            $table->string('inv_type')->nullable();
            $table->string('inv_apply_to_no')->nullable();
            $table->string('inv_purchase_ord_no')->nullable();
            $table->string('inv_no_alt')->nullable();
            $table->string('inv_cust_bal_method')->nullable();
            $table->string('inv_terms_code')->nullable();
            $table->string('inv_frt_pay_code')->nullable();
            $table->decimal('inv_discount_percent')->nullable();
            $table->string('inv_job_no')->nullable();
            $table->string('inv_mfg_location')->nullable();
            $table->string('inv_department')->nullable();
            $table->string('inv_ar_reference')->nullable();
            $table->date('inv_date_picked')->nullable();
            $table->string('inv_selection_code')->nullable();
            $table->date('inv_posted_date')->nullable();
            $table->string('inv_part_posted_flag')->nullable();
            $table->string('inv_copy_to_bm_fg')->nullable();
            $table->string('inv_closed_fg')->nullable();
            $table->string('inv_store_no')->nullable();
            $table->string('inv_rma_status')->nullable();
            $table->string('inv_phatm_inv_flag')->nullable();
            $table->string('inv_dept_no')->nullable();
            $table->string('inv_bol_no')->nullable();
            $table->string('inv_bol_printed')->nullable();
            $table->string('inv_ref_doc_no')->nullable();
            $table->string('inv_po_req_gen_flg')->nullable();
            $table->foreignId('customer_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_headers');
    }
};
