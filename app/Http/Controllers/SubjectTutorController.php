<?php

namespace App\Http\Controllers;

use App\Models\SubjectTutor;
use Illuminate\Http\Request;


   class SubjectTutorController extends Controller
{
    public function index() {
        return response()->json(['Data' => SubjectTutor::with(['subject', 'tutor'])->get()]);
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'subject_id' => 'required|exists:subjects,id',
            'tutor_id' => 'required|exists:tutors,id',
        ]);

        $record = SubjectTutor::create($validated);
        return response()->json(["message" => "Relation created", "Data" => $record]);
    }

    public function show(string $id) {
        return response()->json(["Data" => SubjectTutor::with(['subject', 'tutor'])->findOrFail($id)]);
    }

    public function update(Request $request, string $id) {
        $record = SubjectTutor::findOrFail($id);
        $validated = $request->validate([
            'subject_id' => 'required|exists:subjects,id',
            'tutor_id' => 'required|exists:tutors,id',
        ]);

        $record->update($validated);
        return response()->json(["message" => "Relation updated"]);
    }

    public function destroy(string $id) {
        SubjectTutor::findOrFail($id)->delete();
        return response()->json(["message" => "Relation deleted"]);
    }
}
