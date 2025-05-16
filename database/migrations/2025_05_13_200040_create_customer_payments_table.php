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
        Schema::create('customer_payments', function (Blueprint $table) {
            $table->id();
            $table->string('cus_no');
            $table->date('cus_last_pay_dt')->nullable();
            $table->decimal('cus_last_pay_amt')->nullable();
            $table->decimal('cus_avg_pay_ytd')->nullable();
            $table->decimal('cus_avg_pay_last_yr')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_payments');
    }
};
