<?php

namespace App\Http\Controllers;

use App\Models\Session;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index()
    {
        $sessions = Session::with('booking')->get();
        return response()->json(["Data" => $sessions]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'booking_id' => 'required|exists:bookings,id',
            'meeting_link' => 'nullable|url',
            'status' => 'in:pending,ongoing,completed',
            'started_at' => 'nullable|date',
            'ended_at' => 'nullable|date|after_or_equal:started_at',
        ]);

        $session = Session::create($validated);
        return response()->json([
            "message" => "Session created successfully",
            "Data" => $session
        ]);
    }

    public function show(string $id)
    {
        $session = Session::with('booking')->findOrFail($id);
        return response()->json(["Data" => $session]);
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'meeting_link' => 'nullable|url',
            'status' => 'in:pending,ongoing,completed',
            'started_at' => 'nullable|date',
            'ended_at' => 'nullable|date|after_or_equal:started_at',
        ]);

        $session = Session::findOrFail($id);
        $session->update($validated);

        return response()->json(["message" => "Session updated successfully"]);
    }

    public function destroy(string $id)
    {
        $session = Session::findOrFail($id);
        $session->delete();
        return response()->json(["message" => "Session deleted successfully"]);
    }
}
