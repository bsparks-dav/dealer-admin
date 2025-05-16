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
        Schema::create('invoice_taxes', function (Blueprint $table) {
            $table->id();
            $table->string('inv_no');
            $table->string('inv_tax_code_1')->nullable();
            $table->string('inv_tax_code_2')->nullable();
            $table->string('inv_tax_code_3')->nullable();
            $table->string('inv_tax_percent_1')->nullable();
            $table->string('inv_tax_percent_2')->nullable();
            $table->string('inv_tax_percent_3')->nullable();
            $table->decimal('inv_sales_tax_amt_1')->nullable();
            $table->decimal('inv_sales_tax_amt_2')->nullable();
            $table->decimal('inv_sales_tax_amt_3')->nullable();
            $table->decimal('inv_tot_tax_amt')->nullable();
            $table->decimal('inv_acc_tot_tax_amt')->nullable();
            $table->decimal('inv_acc_sale_tax_amt')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_taxes');
    }
};
