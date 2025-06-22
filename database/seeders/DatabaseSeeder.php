<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Booking;
use App\Models\BookingSession;
use App\Models\Subject;
use App\Models\Tutor;
use App\Models\Student;
use App\Models\Review;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create a default Admin
        Admin::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
        ]);

        // Create a default User for relationships
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        
        // Create Students
        $students = Student::factory(20)->create();

        // Create Subjects
        $subjects = Subject::factory()->createMany([
            ['name' => 'Mathematics', 'level' => 'University'],
            ['name' => 'Physics', 'level' => 'University'],
            ['name' => 'Chemistry', 'level' => 'High School'],
            ['name' => 'Biology', 'level' => 'High School'],
            ['name' => 'Computer Science', 'level' => 'University'],
            ['name' => 'History', 'level' => 'High School'],
            ['name' => 'Literature', 'level' => 'University'],
            ['name' => 'Languages', 'level' => 'Beginner'],
        ]);

        // Create Tutors and associate them with subjects
        Tutor::factory(15)->create()->each(function ($tutor) use ($subjects) {
            // Assign 1 to 3 random subjects to each tutor
            $tutor->subjects()->attach(
                $subjects->random(rand(1, 3))->pluck('id')->toArray()
            );
        });

        // Create Bookings
        $tutors = Tutor::all();
        if ($tutors->isNotEmpty() && $students->isNotEmpty()) {
            foreach ($students as $student) {
                // Each student makes 1 to 2 bookings
                for ($i = 0; $i < rand(1, 2); $i++) {
                    $tutor = $tutors->random();
                    $subject = $tutor->subjects->isNotEmpty() ? $tutor->subjects->random() : $subjects->random();
                    
                    Booking::factory()->create([
                        'student_id' => $student->id,
                        'tutor_id' => $tutor->id,
                        'subject_id' => $subject->id,
                    ]);
                }
            }
        }
        
        // Create Reviews for some bookings
        $bookings = Booking::whereIn('status', ['completed', 'scheduled'])->get();
        foreach ($bookings->take(15) as $booking) {
            Review::factory()->create([
                'student_id' => $booking->student_id,
                'tutor_id' => $booking->tutor_id,
            ]);
        }

        // Create BookingSessions for some bookings
        foreach ($bookings->take(10) as $booking) {
            BookingSession::factory()->create([
                'booking_id' => $booking->id,
            ]);
        }
    }
}
