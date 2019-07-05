@extends('layouts.card')

@section('card_header')

<h4>Submit Assignment in <span class="badge">{{ $lab->title }}</h4>

@endsection

@section('card_body')

<form action="{{ route('courses.labs.assignments.store', ['course' => $course, 'lab' => $lab]) }}" method="POST"
    enctype="multipart/form-data">
    @include('courses.labs.assignments.form')

    <div class="form-group row mb-0">
        <div class="col-md-2 offset-md-2">
            <button type="submit" class="btn btn-success">Create</button>
        </div>
    </div>

</form>

@endsection
