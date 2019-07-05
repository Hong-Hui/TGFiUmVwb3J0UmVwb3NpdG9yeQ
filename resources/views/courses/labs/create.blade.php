@extends('layouts.card')

@section('card_header')

<h4>Create Lab for <span class="badge">{{ $course->name }}</h4>

@endsection

@section('card_body')

<form action="{{ route('courses.labs.store', ['course' => $course]) }}" method="POST">
    @include('courses.labs.form')

    <div class="form-group row mb-0">
        <div class="col-md-2 offset-md-2">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </div>
</form>

@endsection
