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
        Schema::create('tenant_lease_info_leases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('monthly_rent');
            $table->timestamps(); // This will create 'created_at' and 'updated_at' with current timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenant_lease_info_leases');
    }
};
