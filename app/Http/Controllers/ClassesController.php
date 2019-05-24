<?php

namespace App\Http\Controllers;

use App\Classe;
use Illuminate\Http\Request;

class ClassesController extends Controller
{

    public function index()
    {
        $ongoingClasses = Classe::ongoing()->get();
        $endedClasses = Classe::ended()->get();
        $archivedClasses = Classe::archived()->get();

        return view('classes.index', compact('ongoingClasses', 'endedClasses', 'archivedClasses'));
    }

    public function create()
    {
        $classes = Classe::all();

        return view('classes.create', compact('classes'));
    }

    public function store(Request $request)
    {
        $classe = new Classe();

        $data = request()->validate([
            'name' => 'required|min:5',
            'major' => 'required|min:5',
            'year' => 'required|min:4|max:4',
            'semester' => 'required',
            'number' => 'required',
            'status' => 'required',
        ]);

        Classe::create($data);

        return redirect('classes');
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
