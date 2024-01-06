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
        Schema::create('admin_lease_management_lease_documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lease_id'); // referencing leases table
            $table->string('document_type');
            $table->string('document_url');
            $table->timestamp('created_at')->default(now());
            $table->timestamp('updated_at')->default(now());
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_lease_management_lease_documents');
    }
};
