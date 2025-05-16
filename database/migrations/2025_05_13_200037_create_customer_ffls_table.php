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
        Schema::create('customer_ffls', function (Blueprint $table) {
            $table->id();
            $table->string('cus_no');
            $table->string('cus_ffl_no')->nullable();
            $table->date('cus_ffl_exp_date')->nullable();
            $table->string('cus_ffl_filler')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_ffls');
    }
};
