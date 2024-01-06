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
        Schema::create('admin_financial_management_invoices', function (Blueprint $table){
            $table->id();
            $table->foreignId('property_id'); //referencing the properties table
            $table->foreignId('tenant_id'); //referencing the tenant table
            $table->integer('amount'); //referencing the amount
            $table->string('status'); //referencing the status
            $table->date('due_date');
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
