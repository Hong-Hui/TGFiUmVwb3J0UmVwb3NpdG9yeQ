<?php

namespace App\Http\Controllers;

use \App\User;
use \App\Lab;
use \App\Course;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Course $course, Lab $lab)
    {
        if ($course->exists) {

            if ($lab->exists) {

                $students = $lab->users()->paginate(15);
            } else {

                $lab = new Lab();
                $students = $course->users()->paginate(15);
            }
        } else {

            $course = new Course();
            $lab = new Lab();
            $students = User::students()->paginate(15);
        }

        return view('students.index', compact('students', 'course', 'lab'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {

        $student = User::find($id);

        return view('students.show', compact('student'));
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
