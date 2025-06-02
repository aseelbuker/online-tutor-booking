<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $admins = Admin::all();
        return response()->json(["Data" => $admins]);
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:admins,email',
            'password' => 'required|min:6',
        ]);


        $admin = Admin::create($validated);
        return response()->json(["message" => "Admin created successfully", "Data" => $admin]);
    }

    public function show(string $id) {
        $admin = Admin::findOrFail($id);
        return response()->json(["message" => "Admin fetched successfully", "Data" => $admin]);
    }

    public function update(Request $request, string $id) {
        $admin = Admin::findOrFail($id);
        $validated = $request->validate([
            'name' => 'sometimes|string',
            'email' => 'sometimes|email|unique:admins,email,' . $admin->id,
            'password' => 'sometimes|min:6',
        ]);

        $admin->update($validated);
        return response()->json(["message" => "Admin updated successfully"]);
    }

    public function destroy(string $id) {
        Admin::findOrFail($id)->delete();
        return response()->json(["message" => "Admin deleted successfully"]);
    }
}
