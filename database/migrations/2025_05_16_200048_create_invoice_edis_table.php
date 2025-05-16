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
        Schema::create('invoice_edis', function (Blueprint $table) {
            $table->id();
            $table->string('inv_no');
            $table->string('inv_edi_fg')->nullable();
            $table->string('inv_edi_po_no_cont')->nullable();
            $table->string('inv_edi_exp_flg')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_edis');
    }
};
