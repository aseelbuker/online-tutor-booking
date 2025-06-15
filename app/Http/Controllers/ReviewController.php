<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = Review::all();
        return view('review.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('review.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'student_id' => 'required|exists:students,id',
            'tutor_id' => 'required|exists:tutors,id',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string|max:1000',
            'hidden' => 'boolean',
        ]);
        Review::create($validated);
        return redirect()->route('review.index')->with('success', 'Review created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $review = Review::findOrFail($id);
        return view('review.show', compact('review'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $review = Review::findOrFail($id);
        return view('review.edit', compact('review'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $review = Review::findOrFail($id);
        $validated = $request->validate([
            'student_id' => 'required|exists:students,id',
            'tutor_id' => 'required|exists:tutors,id',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string|max:1000',
            'hidden' => 'boolean',
        ]);
        $review->update($validated);
        return redirect()->route('review.index')->with('success', 'Review updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();
        return redirect()->route('review.index')->with('success', 'Review deleted successfully');
    }

    public function reviewVisibilty(string $id)
    {
        $review = Review::findOrFail($id);
        $review->hidden = !$review->hidden;
        $review->save();
        return response()->json([
            "message" => "Review visibility updated successfully",
            "Data" => $review
        ]);
    }

    public function tutorReviews($tutorId)
    {
        return Review::where('tutor_id', $tutorId)->where('hidden', false)->get();
    }

    public function studentReviews($studentId)
    {
        return Review::where('student_id', $studentId)->where('hidden', false)->get();
    }
}
