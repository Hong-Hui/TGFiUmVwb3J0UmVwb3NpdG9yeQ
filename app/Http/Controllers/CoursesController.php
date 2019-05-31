<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{

    public function index()
    {
        $ongoingCourses = Course::ongoing()->get();
        $endedCourses = Course::ended()->get();
        $archivedCourses = Course::archived()->get();

        return view('courses.index', compact('ongoingCourses', 'endedCourses', 'archivedCourses'));
    }

    public function create()
    {
        $courses = Course::all();

        return view('courses.create', compact('courses'));
    }

    public function store(Request $request)
    {
        // $course = new Course();

        $data = request()->validate([
            'name' => 'required|min:5',
            'major' => 'required|min:5',
            'year' => 'required|min:4|max:4',
            'section' => 'required',
            'group' => 'required',
            'status' => 'required',
        ]);

        Course::create($data);

        return redirect('courses');
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
