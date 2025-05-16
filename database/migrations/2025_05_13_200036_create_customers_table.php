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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('cus_no');
            $table->string('cus_name')->nullable();
            $table->string('cus_corr_name')->nullable();
            $table->string('cus_street1')->nullable();
            $table->string('cus_street2')->nullable();
            $table->string('cus_city')->nullable();
            $table->string('cus_st')->nullable();
            $table->string('cus_zip')->nullable();
            $table->string('cus_country')->nullable();
            $table->string('cus_geo_code')->nullable();
            $table->string('cus_outside_city_lm')->nullable();
            $table->string('cus_contact')->nullable();
            $table->string('cus_phone_no')->nullable();
            $table->string('cus_fax_number')->nullable();
            $table->date('cus_start_dt')->nullable();
            $table->string('cus_slm_no')->nullable();
            $table->string('cus_tp')->nullable();
            $table->string('cus_bal_meth')->nullable();
            $table->string('cus_stm_freq')->nullable();
            $table->string('cus_exempt_no')->nullable();
            $table->string('cus_search_name')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
