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
        Schema::create('admin_bookings_client_bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id'); // foreign key referencing the properties table
            $table->foreignId('tenant_id'); // tenant
            $table->date('booking_date'); //
            $table->timestamp('created_at');
            $table->timestamp('updated_at')->nullable(); // Set the default value to null
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_bookings_client_bookings');
    }
};
