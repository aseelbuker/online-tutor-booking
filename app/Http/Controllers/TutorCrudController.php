<!-- <?php

// namespace App\Http\Controllers;
// use App\Models\Tutor;
// use Illuminate\Http\Request;


// class tutorCrudController extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      */
//     public function index()
//     {
//         $tutors=Tutor::all();
//         return view('Tutor.index', compact('tutors'));
//     }

//     /**
//      * Show the form for creating a new resource.
//      */
//     public function create()
//     {
//          return view('Tutor.create');
//     }

//     /**
//      * Store a newly created resource in storage.
//      */
//     public function store(Request $request)
//     {
//         $input=$request->validate([
//         'name'=>['required'],
//         'email'=>['required'],
//         'gender'=>['required'],
//         'date_of_birth'=>['required'],
//         'address'=>['required'],
//         'rating'=>['required'],
//         'total_reviews'=>['required'],
//         'total_students'=>['required'],
//         'city'=>['required'],
//         'password'=>['required'],
//         'qualification'=>['required'],
//         'background_check_status'=>['required'],
//         'hourly_rate'=>['required'],
//         'profile_picture'=>['required'],
//         'phone_number'=>['required'],
//         'bio'=>['required'],
//         'availability'=>['required']
//         ]);
//         Tutor::create($input);
//         return redirect()->route('Tutor.index')->with('done');
//     }

//     /**
//      * Display the specified resource.
//      */
//     public function show(Tutor $tutors)
//     {
//         return view('Tutor.show', compact('tutors'));

//     }

//     /**
//      * Show the form for editing the specified resource.
//      */
//     public function edit(Tutor $tutors)
//     {
//          return view('Tutor.edit', compact('tutors'));
//     }

//     /**
//      * Update the specified resource in storage.
//      */
//     public function update(Request $request, Tutor $tutors)
//     {
//          $input=$request->validate([
//         'name'=>['required'],
//         'email'=>['required'],
//         'gender'=>['required'],
//         'date_of_birth'=>['required'],
//         'address'=>['required'],
//         'rating'=>['required'],
//         'total_reviews'=>['required'],
//         'total_students'=>['required'],
//         'city'=>['required'],
//         'password'=>['required'],
//         'qualification'=>['required'],
//         'background_check_status'=>['required'],
//         'hourly_rate'=>['required'],
//         'profile_picture'=>['required'],
//         'phone_number'=>['required'],
//         'bio'=>['required'],
//         'availability'=>['required']
//         ]);
//         $tutors->update($input);
//         return redirect()->route('Tutor.index')->with('done updating ');
//     }

//     /**
//      * Remove the specified resource from storage.
//      */
//     public function destroy(Tutor $tutors)
//     {
//          $tutors->delete();
//          return redirect()->route('Tutor.index')->with('done deleting');

//     }
// }
