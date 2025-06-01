<?php

use App\Models\Booking;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
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
        Schema::create('class_sessions', function (Blueprint $table) {


    $table->foreignId('booking_id')->constrained('bookings');
    $table->dateTime('start_time')->nullable();
    $table->dateTime('end_time')->nullable();
    $table->string('meeting_link')->nullable(); 
    $table->string('status')->default('pending');
    $table->text('notes')->nullable();
    $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessions');
    }
};
