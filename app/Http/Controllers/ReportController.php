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
        $reports = Report::all();
        return view('report.index', compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('report.create');
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
        Report::create($validated);
        return redirect()->route('report.index')->with('success', 'Report submitted');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $report = Report::findOrFail($id);
        return view('report.show', compact('report'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $report = Report::findOrFail($id);
        return view('report.edit', compact('report'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $report = Report::findOrFail($id);
        $validated = $request->validate([
            'reason' => 'nullable|string',
            'resolved' => 'boolean',
        ]);
        $report->update($validated);
        return redirect()->route('report.index')->with('success', 'Report updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $report = Report::findOrFail($id);
        $report->delete();
        return redirect()->route('report.index')->with('success', 'Report deleted');
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