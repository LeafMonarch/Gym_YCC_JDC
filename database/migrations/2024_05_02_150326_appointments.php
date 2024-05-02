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
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('appointment_id');
            $table->unsignedBigInteger('user_id');
            $table->dateTime('decided_time');
            $table->string('exercise_type', 20);
            $table->unsignedInteger('coach_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('coach_id')->references('coach_id')->on('coaches');
            $table->foreign('exercise_type')->references('exercise_type')->on('exercises');
        });

        DB::statement('ALTER TABLE appointments AUTO_INCREMENT = 1');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
