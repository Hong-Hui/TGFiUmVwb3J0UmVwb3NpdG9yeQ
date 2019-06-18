@extends('layouts.app')

@section('title', 'Create Assignment')

@section('content')

{{-- Assignments.create placeholder --}}

    <h1>Create Assignment for <span class="text-muted">{{ $lab->title }}</h1>

    <form action="{{ route('courses.labs.assignments.store', ['course' => $course, 'lab' => $lab]) }}" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="source">Source</label>
            <input type="file" name="source">
            <div>{{ $errors->first('source') }}</div>
        </div>

        @include('courses.labs.assignments.form')

        <button type="submit" class="btn btn-primary">Create</button>
    </form>

@endsection
