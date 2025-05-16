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
        Schema::create('customer_accounts', function (Blueprint $table) {
            $table->id();
            $table->string('cus_no');
            $table->string('cus_collector')->nullable();
            $table->string('cus_order_loc')->nullable();
            $table->string('cus_terr')->nullable();
            $table->string('cus_ar_acct_no')->nullable();
            $table->string('cus_ship_via_cd')->nullable();
            $table->string('cus_ups_zone')->nullable();
            $table->string('cus_terms_cd')->nullable();
            $table->date('cus_user_date')->nullable();
            $table->decimal('cus_user_amt')->nullable();
            $table->date('cus_exempt_exp_date')->nullable();
            $table->string('cus_exempt_reason_cd')->nullable();
            $table->string('cus_bill_to_no')->nullable();
            $table->string('cus_form_no')->nullable();
            $table->date('cus_slm_start_dt')->nullable();
            $table->string('cus_abc_class')->nullable();
            $table->string('cus_frt_pay_code')->nullable();
            $table->string('cus_del_lead_time')->nullable();
            $table->date('cus_pick_inv_amt')->nullable();
            $table->string('cus_del_day_erly_alw')->nullable();
            $table->date('cus_access_date')->nullable();
            $table->dateTime('cus_access_time')->nullable();
            $table->string('cus_transfer_to_loc')->nullable();
            $table->integer('cus_transit_days')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_accounts');
    }
};
