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
        Schema::create('customer_flags', function (Blueprint $table) {
            $table->id();
            $table->string('cus_no');
            $table->string('cus_allow_sub_itms')->nullable();
            $table->string('cus_allow_bo')->nullable();
            $table->string('cus_allow_part_ship')->nullable();
            $table->string('cus_print_dunn_fg')->nullable();
            $table->string('cus_fin_chg_fg')->nullable();
            $table->string('cus_use_bill_to_adrr')->nullable();
            $table->string('cus_restrict_item')->nullable();
            $table->string('cus_immed_ord_ack')->nullable();
            $table->string('cus_transfer_flag')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_flags');
    }
};
