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
        Schema::create('pro_manager_booking_rental_payments_reminders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tenant_id');
            $table->date('reminder_date');
            $table->timestamps(); // This will create 'created_at' and 'updated_at' with current timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pro_manager_booking_rental_payments_reminders');
    }
};
