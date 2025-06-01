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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
        $table->foreignId('student_id')->constrained('students')->cascadeOnDelete();
        $table->foreignId('tutor_id')->constrained('tutors')->cascadeOnDelete();

        $table->Integer('rating')->unsigned(); // from 1 to 5
        $table->text('comment')->nullable();
        
        $table->boolean('hidden')->default(false); // for moderation if the review is inappropriate

        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
