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
        Schema::create('customer_tax_codes', function (Blueprint $table) {
            $table->id();
            $table->string('cus_no');
            $table->string('cus_txbl_fg')->nullable();
            $table->string('cus_tx_cd1')->nullable();
            $table->string('cus_tx_cd2')->nullable();
            $table->string('cus_tx_cd3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_tax_codes');
    }
};
