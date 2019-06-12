<?php

namespace App\Http\Controllers;

use App\Course;

use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Start Restful

    public function index()
    {
        $ongoingCourses = Course::ongoing()->get();
        $completedCourses = Course::completed()->get();
        $archivedCourses = Course::archived()->get();

        return view('courses.index', compact('ongoingCourses', 'completedCourses', 'archivedCourses'));
    }

    public function create()
    {
        $course = new Course();

        return view('courses.create', compact('course'));
    }

    public function store(Request $request)
    {
        $course = Course::create($this->validateRequest());

        return redirect()->route('courses.index');
    }

    public function show(Course $course)
    {
        return view('courses.show', compact('course'));
    }

    public function edit(Course $course)
    {
        return view('courses.edit', compact('course'));
    }

    public function update(Request $request, Course $course)
    {
        $course->update($this->validateRequest());

        return redirect()->route('courses.show', ['course' => $course]);
    }

    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('courses.index');
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
