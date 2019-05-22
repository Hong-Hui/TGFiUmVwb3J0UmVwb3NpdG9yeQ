<?php

namespace App\Http\Controllers;

use App\Classe;
use Illuminate\Http\Request;

class ClassesController extends Controller
{

    public function index()
    {
        $classes = Classe::all();

        return view('classes.index', compact('classes', $classes));
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
