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
        Schema::create('invoice_item_orgs', function (Blueprint $table) {
            $table->id();
            $table->string('inv_itm_inv_no');
            $table->integer('inv_itm_seq_no');
            $table->decimal('inv_itm_price_org')->nullable();
            $table->string('inv_itm_org_bk_ord_no')->nullable();
            $table->integer('inv_itm_org_bk_seqno')->nullable();
            $table->string('inv_itm_org_itm_no')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_item_orgs');
    }
};
