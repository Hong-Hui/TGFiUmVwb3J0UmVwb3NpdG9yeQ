<?php

namespace App\Http\Controllers;

use App\Course;
use App\Lab;
use Illuminate\Http\Request;

class LabsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    // Start Restful

    public function index(Course $course)
    {
        return view('courses.labs.index', compact('course'));
    }

    public function create(Course $course)
    {
        $this->authorize('create', Lab::class);

        $lab = new Lab();

        return view('courses.labs.create', compact('course', 'lab'));
    }

    public function store(Request $request, Course $course)
    {
        $this->authorize('create', Lab::class);

        $lab = Lab::create($this->validateRequest($course));

        return redirect()->route('courses.labs.index', ['course' => $course, 'lab' => $lab]);
    }

    public function show(Course $course, Lab $lab)
    {
        $this->authorize('view', $lab);

        return view('courses.labs.show', compact('course', 'lab'));
    }

    public function edit(Course $course, Lab $lab)
    {
        $this->authorize('update', $lab);

        return view('courses.labs.edit', compact('course', 'lab'));
    }

    public function update(Request $request, Course $course, Lab $lab)
    {
        $this->authorize('update', $lab);

        $lab->update($this->validateRequest($course));

        return redirect()->route('courses.labs.show', ['course' => $course, 'lab' => $lab]);
    }

    public function destroy(Course $course, Lab $lab)
    {
        $this->authorize('delete', $lab);

        $lab->delete();

        return redirect()->route('courses.labs.index', ['course' => $course]);
    }

    // End Restful

    private function validateRequest($course)
    {
        $validatedData = request()->validate([
            'title' => 'required|min:5',
            'max_members' => 'required|numeric',
            'deadline' => 'required|date',
        ]);

        $validatedData['status'] = 'open';
        $validatedData['course_id'] = $course->id;

        return $validatedData;
    }

}
