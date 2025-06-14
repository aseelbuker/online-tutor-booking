<?php

namespace App\Http\Controllers;

use App\Models\SubjectTutor;
use App\Models\Subject;
use App\Models\Tutor;
use Illuminate\Http\Request;

class SubjectTutorController extends Controller
{
    public function index()
    {
        $subjectTutors = SubjectTutor::with(['subject', 'tutor'])->get();
        return view('subjecttutor.index', compact('subjectTutors'));
    }

    public function create()
    {
        $subjects = Subject::all();
        $tutors = Tutor::all();
        return view('subjecttutor.create', compact('subjects', 'tutors'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'subject_id' => 'required|exists:subjects,id',
            'tutor_id' => 'required|exists:tutors,id',
        ]);
        SubjectTutor::create($validated);
        return redirect()->route('subjecttutor.index')->with('success', 'Relation created');
    }

    public function show($id)
    {
        $subjectTutor = SubjectTutor::with(['subject', 'tutor'])->findOrFail($id);
        return view('subjecttutor.show', compact('subjectTutor'));
    }

    public function edit($id)
    {
        $subjectTutor = SubjectTutor::findOrFail($id);
        $subjects = Subject::all();
        $tutors = Tutor::all();
        return view('subjecttutor.edit', compact('subjectTutor', 'subjects', 'tutors'));
    }

    public function update(Request $request, $id)
    {
        $subjectTutor = SubjectTutor::findOrFail($id);
        $validated = $request->validate([
            'subject_id' => 'required|exists:subjects,id',
            'tutor_id' => 'required|exists:tutors,id',
        ]);
        $subjectTutor->update($validated);
        return redirect()->route('subjecttutor.index')->with('success', 'Relation updated');
    }

    public function destroy($id)
    {
        $subjectTutor = SubjectTutor::findOrFail($id);
        $subjectTutor->delete();
        return redirect()->route('subjecttutor.index')->with('success', 'Relation deleted');
    }
}
