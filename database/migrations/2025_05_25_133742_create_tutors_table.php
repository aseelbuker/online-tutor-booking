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
        Schema::create('tutors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->text('qualification')->nullable();
            $table->enum('background_check_status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->decimal('hourly_rate', 4, 2)->nullable();
            $table->string('profile_picture')->nullable();
            $table->string('phone_number')->nullable();
            $table->text('bio')->nullable();
            $table->string('availability')->nullable();
            $table->timestamps();
        });
    }
    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'subject_tutor');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tutors');
    }
};
