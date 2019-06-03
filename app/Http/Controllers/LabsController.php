<?php

namespace App\Http\Controllers;

use App\Lab;
use App\Course;
use Illuminate\Http\Request;

class LabsController extends Controller
{
    public function index($course_id)
    {
        $localCourse = Course::findOrFail($course_id);
        $localLabs = Lab::localLabs($course_id)->get();

        return view('courses.labs.index', compact('localCourse', 'localLabs'));
    }

    public function create($course_id)
    {
        $localCourse = Course::findOrFail($course_id);
        $localLabs = Lab::localLabs($course_id)->get();

        return view('courses.labs.create', compact('localCourse', 'localLabs'));
    }

    public function store(Request $request, $course_id)
    {
        $data = request()->validate([
            'title' => 'required|min:5',
            'max_members' => 'required',
            'deadline' => 'required',
        ]);

        $data['status'] = 'partially marked';
        $data['course_id'] = $course_id;

        Lab::create($data);

        return redirect('courses/' . $course_id . '/labs');
    }

    public function show($id)
    {
        //
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
}
