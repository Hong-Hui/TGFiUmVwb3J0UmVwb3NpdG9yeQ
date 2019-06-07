<?php

namespace App\Http\Controllers;

use App\Lab;
use App\Course;
use Illuminate\Http\Request;

class LabsController extends Controller
{
    public function index(Course $course)
    {
        return view('courses.labs.index', compact('course'));
    }

    public function create(Course $course)
    {
        return view('courses.labs.create', compact('course'));
    }

    public function store(Request $request, Course $course)
    {
        $lab = Lab::create($this->validateRequest($course));

        return redirect('courses/' . $course->id . '/labs');
    }

    public function show(Course $course, Lab $lab)
    {
        return view('courses.labs.show', compact('course', 'lab'));
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

    private function validateRequest($course)
    {
        $validatedData = request()->validate([
            'title' => 'required|min:5',
            'max_members' => 'required',
            'deadline' => 'required',
        ]);

        $validatedData['status'] = 'partially marked';
        $validatedData['course_id'] = $course->id;

        return $validatedData;
    }
}
