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
        Schema::create('customer_amt_ages', function (Blueprint $table) {
            $table->id();
            $table->string('cus_no');
            $table->decimal('cus_amt_age_pd1')->nullable();
            $table->decimal('cus_amt_age_pd2')->nullable();
            $table->decimal('cus_amt_age_pd3')->nullable();
            $table->decimal('cus_amt_age_pd4')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_amt_ages');
    }
};
