<?php

namespace App\Http\Controllers;

use \App\User;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $teachers = User::teachers()->paginate(20);

        return view('teachers.index', compact('teachers'));
    }

    public function create()
    {

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
