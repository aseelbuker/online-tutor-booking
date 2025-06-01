<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
 public function index()
    {
        $subjects = Subject::all();
        return response()->json([
            "Data" => $subjects
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'level' => 'required|string',
        ]);

        $subject = Subject::create($validated);

        return response()->json([
            "message" => "Subject created successfully",
            "Data" => $subject
        ]);
    }

    public function show(string $id)
    {
        $subject = Subject::findOrFail($id);
        return response()->json([
            "Data" => $subject
        ]);
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'level' => 'required|string',
        ]);

        $subject = Subject::findOrFail($id);
        $subject->update($validated);

        return response()->json([
            "message" => "Subject updated successfully"
        ]);
    }

    public function destroy(string $id)
    {
        $subject = Subject::findOrFail($id);
        $subject->delete();

        return response()->json([
            "message" => "Subject deleted successfully"
        ]);
    }

    public function assignTutor(Request $request, $subjectId)
    {
        $request->validate([
            'tutor_id' => 'required|exists:tutors,id'
        ]);

        $subject = Subject::findOrFail($subjectId);
        $subject->tutors()->syncWithoutDetaching([$request->tutor_id]);

        return response()->json([
            "message" => "Tutor assigned to subject successfully"
        ]);
    }
    public function subjectTutors($subjectId)
    {
        $subject = Subject::with('tutors')->findOrFail($subjectId);
        return response()->json([
            "Tutors" => $subject->tutors
        ]);
    }
}
