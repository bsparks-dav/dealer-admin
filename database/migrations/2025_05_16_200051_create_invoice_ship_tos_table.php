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
        Schema::create('invoice_ship_tos', function (Blueprint $table) {
            $table->id();
            $table->string('inv_no');
            $table->string('inv_ship_to_no')->nullable();
            $table->string('inv_ship_to_name')->nullable();
            $table->string('inv_ship_to_addr_1')->nullable();
            $table->string('inv_ship_to_addr_2')->nullable();
            $table->string('inv_ship_to_city')->nullable();
            $table->string('inv_ship_to_st')->nullable();
            $table->string('inv_ship_to_zipcd')->nullable();
            $table->string('inv_ship_to_country')->nullable();
            $table->string('ship_to_filler1')->nullable();
            $table->string('ship_to_filler2')->nullable();
            $table->date('inv_shipping_date')->nullable();
            $table->string('inv_ship_via_code')->nullable();
            $table->string('inv_ship_instruct1')->nullable();
            $table->string('inv_ship_instruct2')->nullable();
            $table->string('inv_ship_to_fr_fo_fg')->nullable();
            $table->decimal('inv_frt_amt')->nullable();
            $table->string('inv_frt_acct_no')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_ship_tos');
    }
};
