<?php

namespace App\Http\Controllers;

use App\Lab;
use App\Classe;
use Illuminate\Http\Request;

class LabsController extends Controller
{
    public function index($classe_id)
    {
        // $labs = Lab::all();

        $localClasse = Classe::where('id', $classe_id)->get();
        $localLabs = Lab::localLabs($classe_id)->get();

        return view('classes.labs.index', compact('localLabs', 'localClasse'));
    }

    public function create($classe_id)
    {
        $labs = Lab::all();

        return view('classes.labs.create', compact('labs', 'classe_id'));
    }

    public function store(Request $request, $classe_id)
    {
        $data = request()->validate([
            'title' => 'required|min:5',
            'max_members' => 'required',
            'deadline' => 'required',
        ]);

        $data['classe_id'] = $classe_id;

        Lab::create($data);

        // no way man xD
        return redirect('classes/' . $classe_id . '/labs');
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
