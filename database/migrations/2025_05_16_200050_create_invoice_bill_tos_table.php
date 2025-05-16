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
        Schema::create('invoice_bill_tos', function (Blueprint $table) {
            $table->id();
            $table->string('inv_no');
            $table->string('inv_bill_to_no')->nullable();
            $table->string('inv_bill_to_name')->nullable();
            $table->string('inv_bill_to_addr_1')->nullable();
            $table->string('inv_bill_to_addr_2')->nullable();
            $table->string('inv_bill_to_city')->nullable();
            $table->string('inv_bill_to_st')->nullable();
            $table->string('inv_bill_to_zipcd')->nullable();
            $table->string('inv_bill_to_country')->nullable();
            $table->string('bill_to_filler1')->nullable();
            $table->string('bill_to_filler2')->nullable();
            $table->string('inv_bill_to_fr_fo_fg')->nullable();
            $table->date('inv_date_billed')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_bill_tos');
    }
};
