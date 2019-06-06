<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{

    public function index()
    {
        $ongoingCourses = Course::ongoing()->get();
        $completedCourses = Course::completed()->get();
        $archivedCourses = Course::archived()->get();

        return view('courses.index', compact('ongoingCourses', 'completedCourses', 'archivedCourses'));
    }

    public function create()
    {
        $courses = Course::all();

        return view('courses.create', compact('courses'));
    }

    public function store(Request $request)
    {
        $course = Course::create($this->validateRequest());

        return redirect('courses');
    }

    public function show(Course $course)
    {
        return view('courses.show', compact('course'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    // End Restful

    private function validateRequest()
    {
        $validatedData = request()->validate([
            'name' => 'required|min:5',
            'major' => 'required|min:5',
            'year' => 'required|min:4|max:4',
            'section' => 'required',
            'group' => 'required',
            'status' => 'required',
        ]);

        return $validatedData;
    }
}
