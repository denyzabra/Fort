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
        Schema::create('admin_bookings_rent_payments_reminders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tenant_id'); // tenant id
            $table->date('reminder_date');
            $table->timestamp('created_at');
            $table->timestamp('updated_at')->nullable(); // Set the default value to null
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_bookings_rent_payments_reminders');
    }
};
