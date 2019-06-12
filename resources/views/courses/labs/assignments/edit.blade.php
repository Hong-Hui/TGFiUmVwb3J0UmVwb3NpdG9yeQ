@extends('layouts.app')

@section('title', 'edit assignment ' . $assignment->title)

@section('content')

{{-- courses.labs.assignments.edit placeholder --}}

    <h1>Edit Assignment <span class="text-muted">{{ $assignment->title }}</span></h1>

    <form action="{{ route('courses.labs.assignments.update', ['course' => $course, 'lab' => $lab, 'assignment' => $assignment]) }}" method="POST" enctype="multipart/form-data">
        @method('PATCH')

        @include('courses.labs.assignments.form')

        <button type="submit" class="btn btn-warning">Save</button>
    </form>

@endsection
