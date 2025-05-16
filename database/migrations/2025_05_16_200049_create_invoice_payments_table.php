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
        Schema::create('invoice_payments', function (Blueprint $table) {
            $table->id();
            $table->string('inv_no');
            $table->string('inv_profit_center')->nullable();
            $table->decimal('inv_tot_sale_amt')->nullable();
            $table->decimal('inv_tot_cost')->nullable();
            $table->decimal('inv_tot_weight')->nullable();
            $table->decimal('inv_misc_chg_amt')->nullable();
            $table->string('inv_misc_chg_acct_no')->nullable();
            $table->decimal('inv_payment_amt')->nullable();
            $table->decimal('inv_payment_disc_amt')->nullable();
            $table->string('inv_check_no')->nullable();
            $table->date('inv_check_date')->nullable();
            $table->string('inv_cash_acct_no')->nullable();
            $table->string('inv_payment_tp')->nullable();
            $table->date('inv_full_pay_date')->nullable();
            $table->decimal('inv_acc_misc_chg_amt')->nullable();
            $table->decimal('inv_acc_frt_amt')->nullable();
            $table->decimal('inv_acc_tot_sale_amt')->nullable();
            $table->decimal('inv_comm_percent')->nullable();
            $table->decimal('inv_comm_amount')->nullable();
            $table->text('inv_comment1')->nullable();
            $table->text('inv_comment2')->nullable();
            $table->text('inv_comment3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_payments');
    }
};
