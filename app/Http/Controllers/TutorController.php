<?php

namespace App\Http\Controllers;

use App\Models\Tutor;
use Illuminate\Http\Request;

class TutorController extends Controller
{
    public function index()
    {
        $tutors = Tutor::all();
        return view('tutor.index', compact('tutors'));
    }

    public function create()
    {
        return view('tutor.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:tutors,email',
            'password' => 'required|string|min:8',
        ]);
        Tutor::create($validated);
        return redirect()->route('tutor.index')->with('success', 'Tutor created successfully');
    }

    public function show($id)
    {
        $tutor = Tutor::findOrFail($id);
        return view('tutor.show', compact('tutor'));
    }

    public function edit($id)
    {
        $tutor = Tutor::findOrFail($id);
        return view('tutor.edit', compact('tutor'));
    }

    public function update(Request $request, $id)
    {
        $tutor = Tutor::findOrFail($id);
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:tutors,email,' . $tutor->id,
            'password' => 'nullable|string|min:8',
        ]);
        $tutor->update(array_filter($validated));
        return redirect()->route('tutor.index')->with('success', 'Tutor updated successfully');
    }

    public function destroy($id)
    {
        $tutor = Tutor::findOrFail($id);
        $tutor->delete();
        return redirect()->route('tutor.index')->with('success', 'Tutor deleted successfully');
    }
} 