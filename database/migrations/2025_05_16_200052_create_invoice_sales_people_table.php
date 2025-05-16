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
        Schema::create('invoice_sales_people', function (Blueprint $table) {
            $table->id();
            $table->string('inv_no');
            $table->string('inv_salesman_no1')->nullable();
            $table->decimal('inv_salesman_pct_co1')->nullable();
            $table->decimal('inv_salesman_com_am1')->nullable();
            $table->string('inv_salesman_no2')->nullable();
            $table->decimal('inv_salesman_pct_co2')->nullable();
            $table->decimal('inv_salesman_com_am2')->nullable();
            $table->string('inv_salesman_no3')->nullable();
            $table->decimal('inv_salesman_pct_co3')->nullable();
            $table->decimal('inv_salesman_com_am3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_sales_people');
    }
};
