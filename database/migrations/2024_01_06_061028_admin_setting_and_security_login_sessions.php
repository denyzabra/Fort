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
        Schema::create('admin_setting_and_security_login_sessions', function (Blueprint $table){
            $table->id();
            $table->foreignId('user_id'); //foreign key referencing users table
            $table->timestamp('login_time');
            $table->timestamp('logout_time');
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
