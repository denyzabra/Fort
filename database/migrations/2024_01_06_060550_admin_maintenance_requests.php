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
        Schema::create('admin_maintenance_request', function (Blueprint $table){
            $table->id();
            $table->foreignId('property_id'); //referencing properties table
            $table->foreignId('tenant_id'); //referencing tenant table
            $table->date('request_date'); //request date
            $table->text('description'); //description
            $table->string('status'); //status
            $table->timestamp('created_at'); //created
            $table->timestamp('updated_at'); //updated
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
