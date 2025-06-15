<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::all();
        return view('subject.index', compact('subjects'));
    }

    public function create()
    {
        return view('subject.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'level' => 'required|string',
        ]);
        Subject::create($validated);
        return redirect()->route('subject.index')->with('success', 'Subject created successfully');
    }

    public function show($id)
    {
        $subject = Subject::findOrFail($id);
        return view('subject.show', compact('subject'));
    }

    public function edit($id)
    {
        $subject = Subject::findOrFail($id);
        return view('subject.edit', compact('subject'));
    }

    public function update(Request $request, $id)
    {
        $subject = Subject::findOrFail($id);
        $validated = $request->validate([
            'name' => 'required|string',
            'level' => 'required|string',
        ]);
        $subject->update($validated);
        return redirect()->route('subject.index')->with('success', 'Subject updated successfully');
    }

    public function destroy($id)
    {
        $subject = Subject::findOrFail($id);
        $subject->delete();
        return redirect()->route('subject.index')->with('success', 'Subject deleted successfully');
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
