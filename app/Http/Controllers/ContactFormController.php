<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactFormController extends Controller
{

    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    { }

    private function validateRequest()
    {
        $validatedData = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        return $validatedData;
    }
}
