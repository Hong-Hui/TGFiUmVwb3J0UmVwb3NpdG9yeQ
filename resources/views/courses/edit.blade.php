@extends('layouts.app')

@section('title', 'edit course ' . $course->name)

@section('content')

{{-- courses.edit placeholder --}}

    <h1>Edit Course <span class="text-muted">{{ $course->name }}</span></h1>

    <form action="{{ route('courses.update', ['course' => $course]) }}" method="POST">
        @method('PATCH')

        @include('courses.form')

        <button type="submit" class="btn btn-warning">Save</button>
    </form>

@endsection
