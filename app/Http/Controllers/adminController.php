<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Tutor;
use App\Models\student;
use App\Models\Subject;
use App\Models\Booking;
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
        return redirect()->route('admin.index');
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
/////////////////////////////tutors/////////////////////////////
    public function tutors()
    {
        $tutors = Tutor::with('subjects')->get();
        return view('adminDashboard.tutors', compact('tutors'));
    }
    public function createTutor()
    {
        return view('adminDashboard.tutors.create');
    }

    public function storeTutor(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:tutors,email',
            'password' => 'required|string|min:6',
        ]);
        $validated['password'] = bcrypt($validated['password']);
        Tutor::create($validated);
        return redirect()->route('admin.tutors')->with('success', 'Tutor created successfully.');
    }

    public function editTutor(Tutor $tutor)
    {
        return view('adminDashboard.tutors.edit', compact('tutor'));
    }

    public function updateTutor(Request $request, Tutor $tutor)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:tutors,email,' . $tutor->id,
            'password' => 'nullable|string|min:6',
        ]);
        if (!empty($validated['password'])) {
            $validated['password'] = bcrypt($validated['password']);
        } else {
            unset($validated['password']);
        }
        $tutor->update($validated);
        return redirect()->route('admin.tutors')->with('success', 'Tutor updated successfully.');
    }

    public function destroyTutor(Tutor $tutor)
    {
        $tutor->delete();
        return redirect()->route('admin.tutors')->with('success', 'Tutor deleted successfully.');
    }
/////////////////////////////students/////////////////////////////
    public function students()
    {
        $students = student::all();
        return view('adminDashboard.students', compact('students'));
    }
    public function createStudent()
    {
        return view('adminDashboard.students.create');
    }

    public function storeStudent(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'password' => 'required|string|min:6',
        ]);
        student::create($validated);
        return redirect()->route('admin.students')->with('success', 'Student created successfully.');
    }

    public function editStudent(student $student)
    {
        return view('adminDashboard.students.edit', compact('student'));
    }

    public function updateStudent(Request $request, student $student)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email,' . $student->id,
            'password' => 'nullable|string|min:6',
        ]);
        if (!empty($validated['password'])) {
            $validated['password'] = bcrypt($validated['password']);
        } else {
            unset($validated['password']);
        }
        $student->update($validated);
        return redirect()->route('admin.students')->with('success', 'Student updated successfully.');
    }

    public function destroyStudent(student $student)
    {
        $student->delete();
        return redirect()->route('admin.students')->with('success', 'Student deleted successfully.');
    }
/////////////////////////////subjects/////////////////////////////
    public function subjects()
    {
        $subjects = Subject::with(['tutors', 'bookings'])->get();
        return view('adminDashboard.subjects', compact('subjects'));
    }
    public function createSubject()
    {
        return view('adminDashboard.subjects.create');
    }

    public function storeSubject(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'level' => 'required|string|max:255',
        ]);
        Subject::create($validated);
        return redirect()->route('admin.subjects')->with('success', 'Subject created successfully.');
    }

    public function editSubject(Subject $subject)
    {
        return view('adminDashboard.subjects.edit', compact('subject'));
    }

    public function updateSubject(Request $request, Subject $subject)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'level' => 'required|string|max:255',
        ]);
        $subject->update($validated);
        return redirect()->route('admin.subjects')->with('success', 'Subject updated successfully.');
    }

    public function destroySubject(Subject $subject)
    {
        $subject->delete();
        return redirect()->route('admin.subjects')->with('success', 'Subject deleted successfully.');
    }
/////////////////////////////bookings/////////////////////////////
    public function bookings()
    {
        $bookings = Booking::with(['student', 'tutor', 'subject'])->get();
        return view('adminDashboard.bookings', compact('bookings'));
    }
    public function editBooking(Booking $booking)
    {
        return view('adminDashboard.bookings.edit', compact('booking'));
    }

    public function updateBooking(Request $request, Booking $booking)
    {
        $validated = $request->validate([
            'status' => 'required|in:scheduled,completed,cancelled',
        ]);
        $booking->update($validated);
        return redirect()->route('admin.bookings')->with('success', 'Booking updated successfully.');
    }

    public function destroyBooking(Booking $booking)
    {
        $booking->delete();
        return redirect()->route('admin.bookings')->with('success', 'Booking deleted successfully.');
    }

    

   



   
/////////////////////////////dashboard/////////////////////////////
    public function dashboard()
    {
        // Dynamic statistics using Eloquent
        $totalBookings = \App\Models\Booking::count();
        $totalRevenue = \App\Models\Booking::sum('price');
        $newTutors = \App\Models\Tutor::where('created_at', now()->month)
            ->count();
        $reportedReviews = 'in the next version';
        $notificationsSent = "in the next version"; // Placeholder

        $recentTutorApplications = \App\Models\Tutor::orderBy('created_at', 'desc')->take(5)->get();
        $recentBookings = \App\Models\Booking::with(['student', 'tutor', 'subject'])->orderBy('created_at', 'desc')->take(5)->get();
        $recentReports = \App\Models\Report::with('reporter')->orderBy('created_at', 'desc')->take(5)->get();

        return view('adminDashboard.dashboard', compact(
            'totalBookings', 'totalRevenue', 'newTutors', 'reportedReviews', 'notificationsSent',
            'recentTutorApplications', 'recentBookings', 'recentReports'
        ));
    }
}
