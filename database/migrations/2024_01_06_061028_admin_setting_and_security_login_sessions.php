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
        Schema::create('admin_setting_and_security_login_sessions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->timestamp('login_time')->useCurrent();
            $table->timestamp('logout_time')->useCurrent(); // Use current timestamp as default
            $table->timestamp('created_at')->useCurrent(); // Use current timestamp as default
            $table->timestamp('updated_at')->nullable(); // Allow null for updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_setting_and_security_login_sessions');
    }
};
