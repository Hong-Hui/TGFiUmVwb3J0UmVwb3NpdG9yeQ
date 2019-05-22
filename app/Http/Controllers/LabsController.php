<?php

namespace App\Http\Controllers;

use App\Lab;
use Illuminate\Http\Request;

class LabsController extends Controller
{
    public function index($classe_id)
    {
        $labs = Lab::all()->where('classe_id', $classe_id);

        return view('labs.index', compact('labs', $labs));
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
