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
        $ongoingCourses = Course::ongoing()->orderBy('year', 'desc')->get();
        $completedCourses = Course::completed()->orderBy('year', 'desc')->get();
        $archivedCourses = Course::archived()->orderBy('year', 'desc')->get();

        return view('courses.index', compact('ongoingCourses', 'completedCourses', 'archivedCourses'));
    }

    public function create()
    {
        $this->authorize('create', Course::class);

        $course = new Course();

        return view('courses.create', compact('course'));
    }

    public function store(Request $request)
    {
        $this->authorize('create', Course::class);

        $course = Course::create($this->validateRequest());
        $course->users()->sync([auth()->user()->id]);
        $course->status = 'ongoing';

        return redirect()->route('courses.index');
    }

    public function show(Course $course)
    {
        $this->authorize('view', $course);

        return view('courses.show', compact('course'));
    }

    public function edit(Course $course)
    {
        $this->authorize('update', $course);

        return view('courses.edit', compact('course'));
    }

    public function update(Request $request, Course $course)
    {
        $this->authorize('update', $course);

        $validateRequest = $this->validateRequest();

        $course->update($this->validateRequest());

        return redirect()->route('courses.show', ['course' => $course]);
    }

    public function destroy(Course $course)
    {
        $this->authorize('delete', $course);

        $course->delete();

        return redirect()->route('courses.index');
    }

    // End Restful

    private function validateRequest()
    {
        $validatedData = request()->validate([
            'name' => 'required|min:5',
            'major' => 'required|min:5',
            'year' => 'required',
            'semester' => 'required',
            'section' => 'required',
            'status' => 'required',
        ]);

        return $validatedData;
    }
}
