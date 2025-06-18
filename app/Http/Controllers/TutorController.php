<?php

namespace App\Http\Controllers;

use App\Models\Tutor;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class TutorController extends Controller
{
    public function index()
    {
        $tutors = Tutor::with('subjects')->get();
        return view('tutor.index', compact('tutors'));
    }

    public function create()
    {
        $subjects = Subject::all();
        return view('tutor.create', compact('subjects'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:tutors,email',
            'password' => 'required|string|min:8',
            'subject_ids' => 'required|array',
            'subject_ids.*' => 'exists:subjects,id',
            'description' => 'nullable|string',
            'photo' => 'nullable|image|max:2048', // max 2MB
        ]);

        // Hash the password
        $validated['password'] = Hash::make($validated['password']);

        // Handle photo upload
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('tutor-photos', 'public');
            $validated['photo'] = $path;
        }

        // Create tutor
        $tutor = Tutor::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => $validated['password'],
            'description' => $validated['description'] ?? null,
            'photo' => $validated['photo'] ?? null,
        ]);

        // Attach subjects
        $tutor->subjects()->attach($validated['subject_ids']);

        return redirect()->route('tutor.index')->with('success', 'Tutor created successfully');
    }

    public function show($id)
    {
        $tutor = Tutor::with('subjects')->findOrFail($id);
        return view('tutor.show', compact('tutor'));
    }

    public function edit($id)
    {
        $tutor = Tutor::with('subjects')->findOrFail($id);
        $subjects = Subject::all();
        return view('tutor.edit', compact('tutor', 'subjects'));
    }

    public function update(Request $request, $id)
    {
        $tutor = Tutor::findOrFail($id);
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:tutors,email,' . $tutor->id,
            'password' => 'nullable|string|min:8',
            'subject_ids' => 'required|array',
            'subject_ids.*' => 'exists:subjects,id',
            'description' => 'nullable|string',
            'photo' => 'nullable|image|max:2048', // max 2MB
        ]);

        // Only hash password if it's being updated
        if (!empty($validated['password'])) {
            $validated['password'] = Hash::make($validated['password']);
        } else {
            unset($validated['password']);
        }

        // Handle photo upload
        if ($request->hasFile('photo')) {
            // Delete old photo if exists
            if ($tutor->photo) {
                Storage::disk('public')->delete($tutor->photo);
            }
            $path = $request->file('photo')->store('tutor-photos', 'public');
            $validated['photo'] = $path;
        }

        // Update tutor
        $tutor->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'description' => $validated['description'] ?? null,
            'photo' => $validated['photo'] ?? $tutor->photo,
        ]);

        if (!empty($validated['password'])) {
            $tutor->update(['password' => $validated['password']]);
        }

        // Sync subjects
        $tutor->subjects()->sync($validated['subject_ids']);

        return redirect()->route('tutor.index')->with('success', 'Tutor updated successfully');
    }

    public function destroy($id)
    {
        $tutor = Tutor::findOrFail($id);
        
        // Delete photo if exists
        if ($tutor->photo) {
            Storage::disk('public')->delete($tutor->photo);
        }
        
        $tutor->delete();
        return redirect()->route('tutor.index')->with('success', 'Tutor deleted successfully');
    }
} 