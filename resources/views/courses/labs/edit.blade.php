@extends('layouts.card')

@section('card_header')

<h4>Edit Lab <span class="badge">{{ $lab->title }}</h4>

@endsection

@section('card_body')

<form action="{{ route('courses.labs.update', ['course' => $course, 'lab' => $lab]) }}" method="POST">
    @method('PATCH')
    @include('courses.labs.form')

    <div class="form-group row mb-0">
        <div class="col-md-2 offset-md-2">
            <button type="submit" class="btn btn-warning">Save</button>
        </div>
    </div>
</form>

@endsection
