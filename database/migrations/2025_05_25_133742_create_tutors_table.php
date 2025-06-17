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
            $table->string("gender")->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('address')->nullable();
            $table->decimal('rating', 2, 1)->default(5.0)->check('rating >= 0 and rating <= 10');
            $table->integer('total_reviews')->default(0);
            $table->integer('total_students')->default(0);
            $table->string('city')->nullable();
            $table->string('password');
            $table->text('qualification')->nullable();
            $table->enum('background_check_status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->decimal('hourly_rate', 4, 2)->nullable();
            $table->string('profile_picture')->nullable();
            $table->string('phone_number')->nullable();
            $table->text('bio')->nullable();
            $table->string('availability')->nullable();
            $table->text('description')->nullable();
            $table->string('photo')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }
    // tutor have table schedule that from it can set their availability is this right ?
    // tutor can have many subjects
    // tutor can have many subjects
    // tutor can have many subjects
    // tutor can report many students
    // tutor can send messages to students
    // tutor can have many reviews
    // tutor can  set their availability and time slots
    

    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tutors');
    }
};
