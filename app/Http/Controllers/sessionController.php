<?php

namespace App\Http\Controllers;

use App\Models\Session;
use App\Models\Booking;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    // List all sessions
    public function index()
    {
        $sessions = Session::with('booking')->get();
        return view('sessions.index', compact('sessions'));
    }

    // Show form to create a new session
    public function create()
    {
        $bookings = Booking::all(); // Needed to select a booking
        return view('sessions.create', compact('bookings'));
    }

    // Store new session
    public function store(Request $request)
    {
        $request->validate([
            'booking_id' => 'required|exists:bookings,id',
            'start_time' => 'nullable|date',
            'end_time' => 'nullable|date',
            'meeting_link' => 'nullable|string',
            'status' => 'required|in:pending,confirmed,completed,canceled',
            'notes' => 'nullable|string',
        ]);

        Session::create($request->all());
        return redirect()->route('sessions.index')->with('success', 'Session created successfully.');
    }

    // Show a single session
    public function show(Session $session)
    {
        return view('sessions.show', compact('session'));
    }

    // Edit form
    public function edit(Session $session)
    {
        $bookings = Booking::all();
        return view('sessions.edit', compact('session', 'bookings'));
    }

    // Update
    public function update(Request $request, Session $session)
    {
        $request->validate([
            'booking_id' => 'required|exists:bookings,id',
            'start_time' => 'nullable|date',
            'end_time' => 'nullable|date',
            'meeting_link' => 'nullable|string',
            'status' => 'required|in:pending,confirmed,completed,canceled',
            'notes' => 'nullable|string',
        ]);

        $session->update($request->all());
        return redirect()->route('sessions.index')->with('success', 'Session updated successfully.');
    }

    // Delete
    public function destroy(Session $session)
    {
        $session->delete();
        return redirect()->route('sessions.index')->with('success', 'Session deleted.');
    }
}
