<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Student;
use App\Models\Tutor;
use App\Models\Subject;
use Illuminate\Http\Request;
use Carbon\Carbon;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::with(['student', 'tutor', 'subject'])->get();
        return view('booking.index', compact('bookings'));
    }

    public function create()
    {
        $students = Student::all();
        $tutors = Tutor::all();
        $subjects = Subject::all();
        return view('booking.create', compact('students', 'tutors', 'subjects'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'student_id' => 'required|exists:students,id',
            'tutor_id' => 'required|exists:tutors,id',
            'subject_id' => 'required|exists:subjects,id',
            'scheduled_time' => 'required|date|after:now',
            'price' => 'nullable|numeric|min:0',
        ]);

        // Convert scheduled_time to Carbon instance
        $validated['scheduled_time'] = Carbon::parse($validated['scheduled_time']);
        $validated['status'] = 'pending';

        Booking::create($validated);
        return redirect()->route('booking.index')->with('success', 'Booking created successfully');
    }

    public function show($id)
    {
        $booking = Booking::with(['student', 'tutor', 'subject'])->findOrFail($id);
        return view('booking.show', compact('booking'));
    }

    public function edit($id)
    {
        $booking = Booking::findOrFail($id);
        $students = Student::all();
        $tutors = Tutor::all();
        $subjects = Subject::all();
        return view('booking.edit', compact('booking', 'students', 'tutors', 'subjects'));
    }

    public function update(Request $request, $id)
    {
        $booking = Booking::findOrFail($id);
        $validated = $request->validate([
            'student_id' => 'required|exists:students,id',
            'tutor_id' => 'required|exists:tutors,id',
            'subject_id' => 'required|exists:subjects,id',
            'scheduled_time' => 'required|date',
            'status' => 'required|in:pending,confirmed,cancelled',
            'price' => 'nullable|numeric|min:0',
        ]);

        // Convert scheduled_time to Carbon instance
        $validated['scheduled_time'] = Carbon::parse($validated['scheduled_time']);

        $booking->update($validated);
        return redirect()->route('booking.index')->with('success', 'Booking updated successfully');
    }

    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();
        return redirect()->route('booking.index')->with('success', 'Booking deleted successfully');
    }

    // ✅ Tutor confirms a booking
    public function confirm($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->update(['status' => 'confirmed']);
        return redirect()->route('booking.index')->with('success', 'Booking confirmed successfully');
    }

    // ✅ Tutor cancels a booking
    public function cancel($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->update(['status' => 'cancelled']);
        return redirect()->route('booking.index')->with('success', 'Booking cancelled successfully');
    }

    // ✅ Admin views booking by filter
    public function filterByStatus($status)
    {
        $booking = Booking::where('status', $status)->with(['student', 'tutor'])->get();
        return response()->json(["Data" => $booking]);
    }///
}