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
        Schema::create('progress', function (Blueprint $table) {
            $table->id('progress_id');
    $table->foreignId('student_id')->constrained('students')->cascadeOnDelete();
    $table->foreignId('session_id')->constrained('sessions')->cascadeOnDelete();
    $table->text('learning_outcome_notes')->nullable();
    $table->date('date_recorded');
    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('progress');
    }
};
