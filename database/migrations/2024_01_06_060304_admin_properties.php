<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// return new class extends Migration
// {
//     /**
//      * Run the migrations.
//      */
//     public function up(): void
//     {
//         //
//         Schema::create('admin_properties', function (Blueprint $table){
//             $table->id();
//             $table->string('name');
//             $table->string('category');
//             $table->string('description');
//             $table->string('location');
//             $table->integer('size');
//             $table->integer('bedrooms');
//             $table->integer('bathrooms');
//             $table->string('status');
//             $table->integer('price');
//             $table->timestamp();
//         });
//     }

    /**
     * Reverse the migrations.
     */
//     public function down(): void
//     {
//         //
//     }
// }; -->

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('admin_properties', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category');
            $table->string('description');
            $table->string('location');
            $table->integer('size');
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->string('status');
            $table->integer('price');
            $table->timestamps(); // This line automatically adds 'created_at' and 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_properties');
    }
};
