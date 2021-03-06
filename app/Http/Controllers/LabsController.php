<?php

namespace App\Http\Controllers;

use App\Course;
use App\Lab;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LabsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    // Start Restful

    public function index(Course $course)
    {
        $labs = $course->labs()->orderBy('deadline', 'asc')->paginate(15);

        return view('courses.labs.index', compact('course', 'labs'));
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
        $lab->users()->attach(auth()->user()->id);

        return redirect()->route('courses.labs.index', ['course' => $course]);
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
            'title' => 'required',
            'max_members' => 'required',
            'deadline' => 'required|date',
        ]);

        $validatedData['status'] = 'open';
        $validatedData['course_id'] = $course->id;

        return $validatedData;
    }

    // Exporting a List of assignment Owners and Marks.
    public function makeList($id)
    {
        $lab = Lab::find($id);
        $fileName = $lab->title . ".txt";

        Storage::put($fileName, $lab->title . "\n");

        $assignments = $lab->assignments()->get();
        foreach ($assignments as $assignment) {
            $owner = User::find($assignment->user_id);
            $mark = $assignment->mark;

            if ($mark == null) {
                $mark = "Unmarked";
            }

            $content = "+ \t" . $owner->name . "\t\t - Mark : " . $mark;
            Storage::append($fileName, $content);
        }
        return Storage::download($fileName);
    }
}
