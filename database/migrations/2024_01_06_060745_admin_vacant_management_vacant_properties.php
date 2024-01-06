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
        Schema::create('admin_vacant_management_vacant_properties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id'); // referencing properties table
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamp('created_at');
            $table->timestamp('updated_at')->nullable(); // Set the default value to null
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_vacant_management_vacant_properties');
    }
};
