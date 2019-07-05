@extends('layouts.card')

@section('card_header')

<h4>Create Course</h4>

@endsection

@section('card_body')

<form action="{{ route('courses.store') }}" method="POST">
    @include('courses.form')

    <div class="form-group row mb-0">
        <div class="col-md-2 offset-md-2">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </div>
</form>

@endsection
