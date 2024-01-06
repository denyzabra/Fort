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
        Schema::create('pro_manager_properties', function (Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->string('description');
            $table->text('description');
            $table->string('location');
            $table->integer('size');
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->string('status');
            $table->integer('price');
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
