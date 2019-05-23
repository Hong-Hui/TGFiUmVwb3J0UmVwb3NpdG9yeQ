<?php

namespace App\Http\Controllers;

use App\Classe;
use Illuminate\Http\Request;

class ClassesController extends Controller
{

    public function index()
    {
        $classes = Classe::all();

        return view('classes.index', compact('classes'));
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
            'major' => 'required',
            'year' => 'required',
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
