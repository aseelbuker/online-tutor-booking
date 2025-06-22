<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Tutor;

class BrowseController extends Controller
{
    public function index(Request $request)
    {
        $subjects = [
            ['Mathematics', 'Algebra, Calculus, Statistics, and more', 24, '📘'],
            ['Sciences', 'Physics, Chemistry, Biology, and more', 18, '🔬'],
            ['Languages', 'English, Spanish, French, and more', 32, '🗣️'],
            ['Computer Science', 'Programming, Data Structures, Algorithms', 15, '💻'],
            ['Business Studies', 'Economics, Management, Finance', 12, '📊'],
            ['History', 'World History, US History, European History', 8, '🏛️'],
            ['Arts', 'Drawing, Painting, Music, Theater', 9, '🎨'],
            ['Literature', 'Classic Literature, Essays, Creative Writing', 14, '📚'],
        ];

        $query = $request->input('q');
        if ($query) {
            // If query matches a subject name, redirect to browse.subjects
            foreach ($subjects as $subject) {
                if (stripos($subject[0], $query) !== false) {
                    return redirect()->route('browse.subjects', ['q' => $query]);
                }
            }
            // Otherwise, redirect to browse.tutors
            return redirect()->route('browse.tutors', ['q' => $query]);
        }

        return view('Home.browse', ['subjects' => $subjects, 'query' => $query]);
    }

    public function subjects(Request $request)
    {
        $query = $request->input('q');
        $subjects = Subject::query();
        if ($query) {
            $subjects->where('name', 'like', "%$query%")
                    ->orWhere('level', 'like', "%$query%") ;
        }
        $subjects = $subjects->withCount('tutors')->get();
        // Add a default icon for each subject
        $icons = ['📘','🔬','🗣️','💻','📊','🏛️','🎨','📚'];
        foreach ($subjects as $i => $subject) {
            $subject->icon = $icons[$i % count($icons)];
        }
        return view('Home.browse-subjects', compact('subjects', 'query'));
    }

    public function tutors(Request $request)
    {
        $query = $request->input('q');
        $tutors = Tutor::query();
        if ($query) {
            $tutors->where('name', 'like', "%$query%")
                   ->orWhere('description', 'like', "%$query%") ;
        }
        $tutors = $tutors->with('subjects')->get();
        // Add a default image/icon for each tutor if photo is missing
        $defaultPhoto = 'https://randomuser.me/api/portraits/men/32.jpg';
        foreach ($tutors as $tutor) {
            if (!$tutor->photo) {
                $tutor->photo = $defaultPhoto;
            } else {
                $tutor->photo = asset('storage/' . $tutor->photo);
            }
        }
        return view('Home.browse-tutors', compact('tutors', 'query'));
    }
}
