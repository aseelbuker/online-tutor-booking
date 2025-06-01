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
        $review = Review::all();
        return response()->json([
            "Data" => $review
        ]);
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
        $review = Review::create($validated);
        return response()->json([
            "message" => "Review created successfully",
            "Data" => $review
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $review = Review::findOrFail($id);
        return response()->json([
            "Data" => $review
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'student_id' => 'required|exists:students,id',
            'tutor_id' => 'required|exists:tutors,id',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string|max:1000',
            'hidden' => 'boolean',
            ]);
            $review = Review::findOrFail($id);
            $review->update($validated);
            return response()->json([
                "message" => "Review updated successfully",
            ]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $review = Review::findOrFail($id);
        $review->delete();
        return response()->json([
            "message"=> "Review updated successfully" ]);
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
