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
        Schema::create('customer_sales', function (Blueprint $table) {
            $table->id();
            $table->string('cus_no');
            $table->decimal('cus_sales_ptd')->nullable();
            $table->decimal('cus_sales_ytd')->nullable();
            $table->decimal('cus_sales_last_yr')->nullable();
            $table->decimal('cus_sales_yr_bf_ly')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_sales');
    }
};
