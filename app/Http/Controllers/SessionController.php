<?php

namespace App\Http\Controllers;

use App\Models\Session;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() 
    {
        $session =  Session::all();
        return response()->json([
            "Data" => $session
        ]);
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
            'session_link' => 'nullable|string',
            'notes' => 'nullable|string',
        ]);
        $session = Session::create($validated);
        return response()->json([
            "message" => "Session created successfully",
            "Data" => $session
        ], 201);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $session = Session::findOrFail($id);
        return response()->json([
            "Data" => $session
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'booking_id' => 'required|exists:bookings,id',
            'start_time' => 'required|date',
            'end_time' => 'nullable|date',
            'session_link' => 'nullable|string',
            'notes' => 'nullable|string',
        ]);
        $session = Session::findOrFail($id);
        $session->update($validated);
        return response()->json([
            'message'=> "Session updated successfully",]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $session = Session::findOrFail($id);
        $session->delete();
        return response()->json([
            "message"=> "Session deleted successfully",
            ]);
    }
}
