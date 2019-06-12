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
        $assignment = new Assignment();

        return view('courses.labs.assignments.create', compact('course', 'lab', 'assignment'));
    }

    public function store(Request $request, Course $course, Lab $lab)
    {
        $assignment = Assignment::create($this->validateRequest($lab));

        $this->storeSource($assignment);

        return redirect()->route('courses.labs.assignments.index', ['course' => $course, 'lab' => $lab]);
    }

    public function show(Course $course, Lab $lab, Assignment $assignment)
    {
        return view('courses.labs.assignments.show', compact('course', 'lab', 'assignment'));
    }

    public function edit(Course $course, Lab $lab, Assignment $assignment)
    {
        return view('courses.labs.assignments.edit', compact('course', 'lab', 'assignment'));
    }

    public function update(Request $request, Course $course, Lab $lab, Assignment $assignment)
    {
        $assignment->update($this->validateRequest($lab));

        $this->storeSource($assignment);

        return redirect()->route('courses.labs.assignments.show', ['course' => $course, 'lab' => $lab, 'assignment' => $assignment]);
    }

    public function destroy(Course $course, Lab $lab, Assignment $assignment)
    {
        $assignment->delete();

        return redirect()->route('courses.labs.assignments.index', ['course' => $course, 'lab' => $lab]);
    }

    // End Restful

    private function validateRequest($lab)
    {
        $validatedData = request()->validate([
            'title' => 'required|min:10',
            'mark' => 'sometimes|max:3',
            'visibility' => 'required',
            'source' => 'required|file|max:2000|
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

    private function storeSource($assignment)
    {
        $file = request()->file('source');
        $ext = $file->getClientOriginalExtension();

        $fileName = '[' . $assignment->lab->title . '] - ownerplaceholder - ' . $assignment->title . '.' .$ext;

        $assignment->update([
            'source' => request()->source->storeAs('uploads/' . $assignment->lab->title, $fileName, 'public')
        ]);
    }

    //

    public function fileDownload($id)
    {
        $assignment = Assignment::findOrFail($id);

        $pathToFile = public_path('storage/' . $assignment->source);
        return response()->download($pathToFile);
    }
}
