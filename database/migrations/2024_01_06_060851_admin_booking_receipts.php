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
        //
        Schema::create('admin_bookings_receipts', function (Blueprint $table){
            $table->id();
            $table->foreignId('tenant_id');
            $table->foreignId('payment_id');
            $table->date('receipt_date');
            $table->integer('amount_received');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
