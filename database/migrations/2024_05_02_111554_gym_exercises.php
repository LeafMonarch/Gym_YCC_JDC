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
        Schema::create('gym_exercises', function (Blueprint $table) {
            $table->increments('exercise_id');
            $table->string('exercise_type', 20)->unique();
            $table->string('exercise_intensity', 20);
            $table->timestamps();
        });

        DB::statement('ALTER TABLE gym_exercises AUTO_INCREMENT = 1');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
