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
        Schema::create('invoice_item_flags', function (Blueprint $table) {
            $table->id();
            $table->string('inv_itm_inv_no');
            $table->integer('inv_itm_seq_no');
            $table->string('inv_itm_tax_flag_1')->nullable();
            $table->string('inv_itm_tax_flag_2')->nullable();
            $table->string('inv_itm_tax_flag_3')->nullable();
            $table->string('inv_itm_back_flag')->nullable();
            $table->string('inv_itm_comm_calc_flag')->nullable();
            $table->string('inv_itm_taxable_flag')->nullable();
            $table->string('inv_itm_stocked_flag')->nullable();
            $table->string('inv_itm_control_flag')->nullable();
            $table->string('inv_itm_mult_ftr_flg')->nullable();
            $table->string('inv_itm_price_flag')->nullable();
            $table->string('inv_itm_sty_tmp_flag')->nullable();
            $table->string('inv_itm_cpy_to_bm_fg')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_item_flags');
    }
};
