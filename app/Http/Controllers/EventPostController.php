<?php

namespace App\Http\Controllers;

use App\Models\EventPost;
use Illuminate\Http\Request;

class EventPostController extends Controller
{
    public function index()
    {
        $posts = EventPost::all();
        return response()->json(["Data" => $posts]);
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

        $post = EventPost::create($validated);
        return response()->json([
            "message" => "Event post created successfully",
            "Data" => $post
        ]);
    }

    public function show(string $id)
    {
        $post = EventPost::findOrFail($id);
        return response()->json(["Data" => $post]);
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
            'banner_url' => 'nullable|string|max:500',
            'event_date' => 'nullable|date',
            'price' => 'nullable|numeric|min:0',
            'link' => 'nullable|url',
            'visible' => 'boolean',
        ]);

        $post = EventPost::findOrFail($id);
        $post->update($validated);
        return response()->json(["message" => "Event post updated"]);
    }

    public function destroy(string $id)
    {
        $post = EventPost::findOrFail($id);
        $post->delete();
        return response()->json(["message" => "Event post deleted"]);
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
