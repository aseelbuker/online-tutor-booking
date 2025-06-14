<?php

namespace App\Http\Controllers;

use App\Models\EventPost;
use Illuminate\Http\Request;

class EventPostController extends Controller
{
    public function index()
    {
        $events = EventPost::all();
        return view('eventpost.index', compact('events'));
    }

    public function create()
    {
        return view('eventpost.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'banner_url' => 'nullable|string|max:500',
            'event_date' => 'nullable|date',
            'price' => 'nullable|numeric|min:0',
            'link' => 'nullable|url',
            'visible' => 'boolean',
        ]);
        EventPost::create($validated);
        return redirect()->route('eventpost.index')->with('success', 'Event post created successfully');
    }

    public function show($id)
    {
        $event = EventPost::findOrFail($id);
        return view('eventpost.show', compact('event'));
    }

    public function edit($id)
    {
        $event = EventPost::findOrFail($id);
        return view('eventpost.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $event = EventPost::findOrFail($id);
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'banner_url' => 'nullable|string|max:500',
            'event_date' => 'nullable|date',
            'price' => 'nullable|numeric|min:0',
            'link' => 'nullable|url',
            'visible' => 'boolean',
        ]);
        $event->update($validated);
        return redirect()->route('eventpost.index')->with('success', 'Event post updated');
    }

    public function destroy($id)
    {
        $event = EventPost::findOrFail($id);
        $event->delete();
        return redirect()->route('eventpost.index')->with('success', 'Event post deleted');
    }

    // 🔄 Custom: Toggle Visibility
    public function toggleVisibility($id)
    {
        $post = EventPost::findOrFail($id);
        $post->visible = !$post->visible;
        $post->save();

        return response()->json([
            "message" => "Event post visibility toggled",
            "visible" => $post->visible
        ]);
    }
}
