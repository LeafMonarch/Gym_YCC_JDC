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
        Schema::create('create_gym_users_table', function (Blueprint $table) {
            $table->bigIncrements('User_ID');
            $table->string('Email_address')->unique();
            $table->string('First_name', 15);
            $table->string('Last_name', 15);
            $table->integer('Contact_number')->nullable();
            $table->integer('Access_level')->nullable();
        });
        
        DB::statement('ALTER TABLE gym_users AUTO_INCREMENT = 1'); // Reset auto-increment
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('create_gym_users_table');
    }
};
