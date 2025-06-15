<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::all();
        return view('booking.index', compact('bookings'));
    }

    public function create()
    {
        return view('booking.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'student_id' => 'required|exists:students,id',
            'tutor_id' => 'required|exists:tutors,id',
            'subject_id' => 'nullable|exists:subjects,id',
            'scheduled_time' => 'required|date',
            'price' => 'nullable|numeric|min:0',
        ]);
        Booking::create($validated);
        return redirect()->route('booking.index')->with('success', 'Booking created');
    }

    public function show($id)
    {
        $booking = Booking::findOrFail($id);
        return view('booking.show', compact('booking'));
    }

    public function edit($id)
    {
        $booking = Booking::findOrFail($id);
        return view('booking.edit', compact('booking'));
    }

    public function update(Request $request, $id)
    {
        $booking = Booking::findOrFail($id);
        $validated = $request->validate([
            'status' => 'in:pending,confirmed,canceled',
            'start_time' => 'nullable|date',
            'end_time' => 'nullable|date|after:start_time',
            'price' => 'nullable|numeric|min:0',
        ]);
        $booking->update($validated);
        return redirect()->route('booking.index')->with('success', 'Booking updated');
    }

    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();
        return redirect()->route('booking.index')->with('success', 'Booking deleted');
    }

    // ✅ Tutor confirms a booking
    public function confirm(string $id)
    {
        $booking = Booking::findOrFail($id);
        $booking->update(['status' => 'confirmed']);

        return response()->json(["message" => "Booking confirmed"]);
    }

    // ✅ Tutor cancels a booking
    public function cancel(string $id)
    {
        $booking = Booking::findOrFail($id);
        $booking->update(['status' => 'canceled']);

        return response()->json(["message" => "Booking canceled"]);
    }

    // ✅ Admin views booking by filter
    public function filterByStatus($status)
    {
        $booking = Booking::where('status', $status)->with(['student', 'tutor'])->get();
        return response()->json(["Data" => $booking]);
    }///
}