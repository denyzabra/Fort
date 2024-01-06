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
        Schema::create('admin_tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('maintenance_request_id'); // foreign key referencing maintenance_requests table
            $table->foreignId('service_provider_id'); // foreign key referencing service_providers table
            $table->text('description');
            $table->string('status');
            $table->date('completion_date');
            $table->timestamp('created_at')->useCurrent(); // Use current timestamp as default
            $table->timestamp('updated_at')->useCurrent(); // Use current timestamp as default
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_tasks');
    }
};
