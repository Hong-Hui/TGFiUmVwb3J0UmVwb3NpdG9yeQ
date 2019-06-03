<?php

namespace App\Http\Controllers;

use App\Assignment;
use App\Lab;
use Illuminate\Http\Request;

class AssignmentsController extends Controller
{
    public function index($lab_id)
    {
        $localLab = Lab::findOrFail($lab_id);
        $localAssignments = Assignment::localAssignments($lab_id)->get();

        return view('courses.labs.assignments.index', compact('localLab', 'localAssignments'));
    }

    public function create($lab_id)
    {
        $localLab = Lab::findOrFail($lab_id);
        $localAssignments = Assignment::localAssignments($lab_id)->get();

        return view('courses.labs.assignments.create', compact('localLab', 'localAssignments'));
    }

    public function store(Request $request, $lab_id)
    {
        $data = request()->validate([
            'title' => 'required|min:10',
            'source' => 'required',
            'mark' => 'required',
        ]);

        $data['status'] = 'pending';

        Lab::create($data);

        return redirect('labs/' . $lab_id . '/assignments');
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
