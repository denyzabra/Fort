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
        //
        Schema::create('admin_financial_management_reports', function (Blueprint $table){
            $table->id();
            $table->foreignId('property_id');
            $table->string('report_type');
            $table->string('report_type');
            $table->string('file_url');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
