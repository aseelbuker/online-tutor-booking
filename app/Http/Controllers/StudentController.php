<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = student::all();
        return response()->json([
            'status' => 200,
            'students' => $student
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'password' => 'required|string|min:8',
        ]);

        $student = student::create($validation);
        return response()->json([
            'data' => $student ,
            "message" => "Student created successfully",
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = student::findOrFail($id);
        return response()->json([
            'data' => $student , 
            "message" => "Student retrieved successfully",

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validation = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'password' => 'required|string|min:8',
        ]);

        $student = student::findOrFail($id);
        $student->update($validation);
        return response()->json([
            'status' => 200,
            'student' => $student
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = student::findOrFail($id);
        $student->delete();
        return response()->json([
            'status' => 200,
            'message' => 'Student deleted successfully'
        ]);
    }
}
