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
        Schema::create('admin_document_management_documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id'); // referencing properties table
            $table->string('document_type'); //
            $table->string('document_url');
            $table->timestamp('created_at')->useCurrent(); // Use current timestamp as default
            $table->timestamp('updated_at')->useCurrent(); // Use current timestamp as default
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_document_management_documents');
    }
};
