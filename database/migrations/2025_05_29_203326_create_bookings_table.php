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
        Schema::create('bookings', function (Blueprint $table) {
    $table->id(); // booking_id

    // Foreign keys (assumes referenced tables have an 'id' column)
    $table->foreignId('student_id')->constrained()->cascadeOnDelete();
    $table->foreignId('tutor_id')->constrained()->cascadeOnDelete();
    $table->foreignId('subject_id')->constrained()->cascadeOnDelete();

    $table->dateTime('scheduled_time');
    $table->enum('status', ['pending', 'confirmed', 'cancelled'])->default('pending');
    $table->decimal('price', 8, 2)->nullable();
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
