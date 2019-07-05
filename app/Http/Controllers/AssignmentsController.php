<?php

namespace App\Http\Controllers;

use App\Assignment;
use App\Lab;
use App\Course;
use Illuminate\Http\Request;

class AssignmentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Start Restful

    public function index(Course $course, Lab $lab)
    {
        // Middleware this for members only (once the right policies are established)

        $assignments = Assignment::where('lab_id', $lab->id)->paginate(15);

        return view('courses.labs.assignments.index', compact('course', 'lab', 'assignments'));
    }

    public function create(Course $course, Lab $lab)
    {
        $this->authorize('create', Assignment::class);

        $assignment = new Assignment();

        return view('courses.labs.assignments.create', compact('course', 'lab', 'assignment'));
    }

    public function store(Request $request, Course $course, Lab $lab)
    {
        $this->authorize('create', Assignment::class);

        $validatedData = $this->validateRequest($lab);
        $validatedData['user_id'] = auth()->user()->id;

        $assignment = Assignment::create($validatedData);

        $this->storeSource($course, $lab, $assignment);

        return redirect()->route('courses.labs.assignments.index', ['course' => $course, 'lab' => $lab]);
    }

    public function show(Course $course, Lab $lab, Assignment $assignment)
    {
        $this->authorize('view', $assignment);

        return view('courses.labs.assignments.show', compact('course', 'lab', 'assignment'));
    }

    public function edit(Course $course, Lab $lab, Assignment $assignment)
    {
        $this->authorize('update', $assignment);

        return view('courses.labs.assignments.edit', compact('course', 'lab', 'assignment'));
    }

    public function update(Request $request, Course $course, Lab $lab, Assignment $assignment)
    {
        $this->authorize('update', $assignment);

        $assignment->update($this->validateRequest($lab));

        $this->storeSource($course, $lab, $assignment);

        return redirect()->route('courses.labs.assignments.show', ['course' => $course, 'lab' => $lab, 'assignment' => $assignment]);
    }

    public function destroy(Course $course, Lab $lab, Assignment $assignment)
    {
        $this->authorize('delete', $assignment);

        $assignment->delete();

        return redirect()->route('courses.labs.assignments.index', ['course' => $course, 'lab' => $lab]);
    }

    // End Restful

    private function validateRequest($lab)
    {
        //still has a problem where some extentions are not accepted even after being registered
        $validatedData = request()->validate([
            'title' => 'required',
            'mark' => 'sometimes',
            'visibility' => 'required',
            'source' => 'sometimes|max:2000|
                mimes:
                doc,odt,pdf,rtf,tex,wks,wps,wpd,txt,
                c,cpp,class,cs,h,java,sh,swift,vb,
                ods,xlr,xls,xlsx,
                pps,ppt,pptx,
                asp,aspx,css,js,htm,html,jsp,php,xhtml,
                jpeg,jpg,png,bmp,
                dat,db,log,sql,xml,
                7z,zip,rar',
            'comment' => 'sometimes',
        ]);

        $validatedData['status'] = 'pending';
        $validatedData['lab_id'] = $lab->id;

        return $validatedData;
    }

    private function storeSource($course, $lab, $assignment)
    {
        $storagePath = 'uploads/'
            . $course->name  . '/'
            . $course->year . '/'
            . $course->semester . '/'
            . $course->section . '/'
            . $lab->title;

        if ($file = request()->file('source')) {
            $ext = $file->getClientOriginalExtension();

            $fileName =
                '[' . $assignment->lab->title . '] - '
                . $assignment->user->name . ' - '
                . $assignment->title . '.' . $ext;

            $assignment->update([
                'source' => request()->source->storeAs($storagePath, $fileName, 'public')
            ]);
        }
    }

    // Download

    public function fileDownload($id)
    {
        $assignment = Assignment::findOrFail($id);

        $pathToFile = public_path('storage/' . $assignment->source);

        return response()->download($pathToFile);
    }
}
