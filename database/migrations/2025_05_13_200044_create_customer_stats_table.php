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
        Schema::create('customer_stats', function (Blueprint $table) {
            $table->id();
            $table->string('cus_no');
            $table->decimal('cus_cost_ptd')->nullable();
            $table->decimal('cus_cost_ytd')->nullable();
            $table->decimal('cus_cost_last_yr')->nullable();
            $table->decimal('cus_dsc_pct')->nullable();
            $table->decimal('cus_ytd_dsc_given')->nullable();
            $table->decimal('cus_balance')->nullable();
            $table->decimal('cus_high_balance')->nullable();
            $table->date('cus_last_sale_dt')->nullable();
            $table->decimal('cus_last_sale_amt')->nullable();
            $table->decimal('cus_inv_ytd')->nullable();
            $table->decimal('cus_inv_last_yr')->nullable();
            $table->decimal('cus_paid_inv_ytd')->nullable();
            $table->date('cus_last_stm_age_dt')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_stats');
    }
};
