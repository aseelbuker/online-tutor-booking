<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $booking = Booking::with(['student', 'tutor', 'subject'])->get();
        return response()->json(["Data" => $booking]);
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

        $booking = Booking::create($validated);
        return response()->json([
            "message" => "Booking created",
            "Data" => $booking
        ]);
    }

    public function show(string $id)
    {
        $booking = Booking::with(['student', 'tutor', 'subject'])->findOrFail($id);
        return response()->json(["Data" => $booking]);
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'status' => 'in:pending,confirmed,canceled',
            'start_time' => 'nullable|date',
            'end_time' => 'nullable|date|after:start_time',
            'price' => 'nullable|numeric|min:0',
        ]);

        $booking = Booking::findOrFail($id);
        $booking->update($validated);

        return response()->json(["message" => "Booking updated"]);
    }

    public function destroy(string $id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();

        return response()->json(["message" => "Booking deleted"]);
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
    }
}