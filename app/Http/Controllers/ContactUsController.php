<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        $contacts = ContactUs::all();
        return view('contactus.index', compact('contacts'));
    }

    public function create()
    {
        return view('contactus.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);
        ContactUs::create($validated);
        return redirect()->route('contactus.index')->with('success', 'Message submitted successfully');
    }

    public function show($id)
    {
        $contact = ContactUs::findOrFail($id);
        return view('contactus.show', compact('contact'));
    }

    public function edit($id)
    {
        $contact = ContactUs::findOrFail($id);
        return view('contactus.edit', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $contact = ContactUs::findOrFail($id);
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);
        $contact->update($validated);
        return redirect()->route('contactus.index')->with('success', 'Message updated successfully');
    }

    public function destroy($id)
    {
        $contact = ContactUs::findOrFail($id);
        $contact->delete();
        return redirect()->route('contactus.index')->with('success', 'Message deleted successfully');
    }
} 