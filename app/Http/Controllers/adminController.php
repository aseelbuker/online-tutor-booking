<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $admins = Admin::all();
        return view('admin.index', compact('admins'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email',
            'password' => 'required|string|min:6',
        ]);
        Admin::create($validated);
        return redirect()->route('admin.index')->with('success', 'Admin created successfully');
    }

    public function show($id)
    {
        $admin = Admin::findOrFail($id);
        return view('admin.show', compact('admin'));
    }

    public function edit($id)
    {
        $admin = Admin::findOrFail($id);
        return view('admin.edit', compact('admin'));
    }

    public function update(Request $request, $id)
    {
        $admin = Admin::findOrFail($id);
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email,' . $admin->id,
            'password' => 'nullable|string|min:6',
        ]);
        $admin->update(array_filter($validated));
        return redirect()->route('admin.index')->with('success', 'Admin updated successfully');
    }

    public function destroy($id)
    {
        $admin = Admin::findOrFail($id);
        $admin->delete();
        return redirect()->route('admin.index')->with('success', 'Admin deleted successfully');
    }

    public function dashboard()
    {
        // Example stats, replace with real queries as needed
        $totalBookings = \App\Models\Booking::count();
        $totalRevenue = \App\Models\Booking::sum('price');
        $newTutors = \App\Models\Tutor::whereMonth('created_at', now()->month)->count();
        $reportedReviews = \App\Models\Review::where('hidden', false)->count();
        $notificationsSent = 1284; // Placeholder, replace with real logic

        return view('admin.dashboard', compact('totalBookings', 'totalRevenue', 'newTutors', 'reportedReviews', 'notificationsSent'));
    }
}
