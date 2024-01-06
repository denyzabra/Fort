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
        Schema::create('pro_manager_tenant_management_tenants', function (Blueprint $table){
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->integer('phone_number');
            $table->foreignId('lease_id');
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
