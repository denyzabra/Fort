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
        Schema::create('admin_lease_management_leases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id'); // referencing properties tables
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('monthly_rent');
            $table->timestamp('created_at');
            $table->timestamp('updated_at')->nullable(); // Set the default value to null
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_lease_management_leases');
    }
};
