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
        Schema::create('pro_manager_tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('maintenance_request_id'); // foreign key referencing maintenance requests
            $table->foreignId('service_provider_id'); // foreign key referencing service providers
            $table->text('description');
            $table->string('status');
            $table->date('completion_date');
            $table->timestamp('created_at');
            $table->timestamp('updated_at')->nullable(); // Set the default value to null
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pro_manager_tasks');
    }
};
