@extends('layouts.app')

@section('title', 'Create Assignment')

@section('content')

{{-- Assignments.create placeholder --}}

    <h1>Create Assignment for <span class="text-muted">{{ $lab->title }}</h1>

    <form action="{{ route('courses.labs.assignments.store', ['course' => $course, 'lab' => $lab]) }}" method="POST" enctype="multipart/form-data">
        @include('courses.labs.assignments.form')

        <button type="submit" class="btn btn-primary">Create</button>
    </form>

@endsection
