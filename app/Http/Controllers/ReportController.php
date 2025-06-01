<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $report = Report ::with('reporter')->get();
        $report = Report::all();
                return response()->json(["Data" => $report]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'reported_by' => 'required|exists:users,id',
            'reportable_type' => 'required|string',
            'reportable_id' => 'required|integer',
            'reason' => 'nullable|string',
        ]);

        $report = Report::create($validated);
        return response()->json([
            "message" => "Report submitted",
            "Data" => $report
        ]);
    }

    public function show(string $id)
    {
        $report = Report::with('reportable')->findOrFail($id);
        return response()->json(["Data" => $report]);
    }

    public function update(Request $request, string $id)
    {
        $report = Report::findOrFail($id);
        $report->update([
            'resolved' => $request->input('resolved', true),
        ]);

        return response()->json(["message" => "Report marked as resolved"]);
    }

    public function destroy(string $id)
    {
        $report = Report::findOrFail($id);
        $report->delete();

        return response()->json(["message" => "Report deleted"]);
    }

    // Admin resolves the report manually
    public function resolve(string $id)
    {
        $report = Report::findOrFail($id);
        $report->resolved = true;
        $report->save();

        return response()->json([
            "message" => "Report resolved",
            "Data" => $report
        ]);
    }

    //  List only unresolved reports
    public function unresolved()
    {
        $reports = Report::where('resolved', false)->with('reportable')->get();

        return response()->json([
            "Data" => $reports
        ]);
    }
}