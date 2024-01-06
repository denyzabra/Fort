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
        Schema::create('admin_maintenance_request', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id');
            $table->foreignId('tenant_id');
            $table->date('request_date');
            $table->text('description');
            $table->string('status');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable(); // Set the default value to NULL
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_maintenance_request');
    }
};
