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
        Schema::create('gym_coaches', function (Blueprint $table) {
            $table->increments('coach_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('contact_number', 15)->nullable();
            $table->timestamps();
        });

        DB::statement('ALTER TABLE gym_coaches AUTO_INCREMENT = 1');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
