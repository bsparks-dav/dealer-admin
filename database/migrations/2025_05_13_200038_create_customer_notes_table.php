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
        Schema::create('customer_notes', function (Blueprint $table) {
            $table->id();
            $table->string('cus_no');
            $table->text('cus_comment1');
            $table->text('cus_note_1')->nullable();
            $table->text('cus_note_2')->nullable();
            $table->text('cus_note_3')->nullable();
            $table->text('cus_note_4')->nullable();
            $table->text('cus_note_5')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_notes');
    }
};
