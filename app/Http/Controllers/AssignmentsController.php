<?php

namespace App\Http\Controllers;

use App\Assignment;
use App\Lab;
use App\Course;

use Illuminate\Http\Request;

class AssignmentsController extends Controller
{

    // Start Restful

    public function index(Course $course, Lab $lab)
    {
        return view('courses.labs.assignments.index', compact('course', 'lab'));
    }

    public function create(Course $course, Lab $lab)
    {
        return view('courses.labs.assignments.create', compact('course', 'lab'));
    }

    public function store(Request $request, Course $course, Lab $lab)
    {
        $assignment = Assignment::create($this->validateRequest($lab));

        $originalFileName = $request->source->getClientOriginalName();

        $assignment->update([
            'source' => request()->source->storeAs('public/uploads', $originalFileName)
        ]);

        return redirect('/courses/' . $course->id . '/labs/' . $lab->id . '/assignments');
    }

    public function show(Course $course, Lab $lab, Assignment $assignment)
    {
        return view('courses.labs.assignments.show', compact('course', 'lab', 'assignment'));
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

    private function validateRequest($lab)
    {
        $validatedData = request()->validate([
            'title' => 'required|min:10',
            'mark' => 'sometimes',
            'visibility' => 'required',
            'source' => 'file|max:2000|
                mimes:
                doc,odt,pdf,rtf,tex,wks,wps,wpd,txt,
                c,cpp,class,cs,h,java,sh,swift,vb,
                ods,xlr,xls,xlsx,
                pps,ppt,pptx,
                asp,aspx,css,js,htm,html,jsp,php,xhtml,
                jpeg,jpg,png,bmp,
                dat,db,log,sql,xml,
                7z,zip,rar',
        ]);

        $validatedData['status'] = 'pending';
        $validatedData['lab_id'] = $lab->id;

        return $validatedData;
    }

    // saved for update() implementation
        // private function storeSource($assignment)
        // {
        //     if (request()->has('source')) {
        //         $assignment->update([
        //             'source' => request()->source->store('uploads', 'public')
        //         ]);
        //     }
        // }
    //
}
