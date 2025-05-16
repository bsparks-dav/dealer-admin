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
        Schema::create('invoice_item_qties', function (Blueprint $table) {
            $table->id();
            $table->string('inv_itm_inv_no');
            $table->integer('inv_itm_seq_no');
            $table->integer('inv_itm_qty_order')->nullable();
            $table->integer('inv_itm_qty_to_ship')->nullable();
            $table->integer('inv_itm_qty_back_ord')->nullable();
            $table->integer('inv_itm_qty_rt_to_st')->nullable();
            $table->integer('inv_itm_tot_qty_ord')->nullable();
            $table->integer('inv_itm_tot_qty_shp')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_item_qties');
    }
};
