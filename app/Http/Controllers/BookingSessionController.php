<?php

namespace App\Http\Controllers;

use App\Models\BookingSession;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BookingSessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookingSessions = BookingSession::all();
        return view('bookingsession.index', compact('bookingSessions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bookingsession.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'booking_id' => 'required|exists:bookings,id',
            'start_time' => 'required|date',
            'end_time' => 'nullable|date',
            'meeting_link' => 'nullable|string',
            'status' => 'nullable|in:pending,confirmed,completed,canceled',
            'notes' => 'nullable|string',
        ]);
        if (empty($validated['meeting_link'])) {
            $validated['meeting_link'] = 'https://meet.example.com/' . Str::random(10);
        }
        if (empty($validated['status'])) {
            $validated['status'] = 'pending';
        }
        BookingSession::create($validated);
        return redirect()->route('BookingSession.index')->with('success', 'BookingSession created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $bookingSession = BookingSession::findOrFail($id);
        return view('bookingsession.show', compact('bookingSession'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $bookingSession = BookingSession::findOrFail($id);
        return view('bookingsession.edit', compact('bookingSession'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $bookingSession = BookingSession::findOrFail($id);
        $validated = $request->validate([
            'booking_id' => 'required|exists:bookings,id',
            'start_time' => 'required|date',
            'end_time' => 'nullable|date',
            'meeting_link' => 'nullable|string',
            'status' => 'nullable|in:pending,confirmed,completed,canceled',
            'notes' => 'nullable|string',
        ]);
        $bookingSession->update($validated);
        return redirect()->route('BookingSession.index')->with('success', 'BookingSession updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $bookingSession = BookingSession::findOrFail($id);
        $bookingSession->delete();
        return redirect()->route('BookingSession.index')->with('success', 'BookingSession deleted successfully');
    }
}
