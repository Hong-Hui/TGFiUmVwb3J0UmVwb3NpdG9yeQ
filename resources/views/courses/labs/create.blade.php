@extends('layouts.app')

@section('title', 'Create Lab')

@section('content')

{{-- courses.labs.create placeholder --}}

    <h1>Create Lab for <span class="text-muted">{{ $course->name }}</h1>

    <form action="{{ route('courses.labs.store', ['course' => $course]) }}" method="POST">
        @include('courses.labs.form')

        <button type="submit" class="btn btn-primary">Create</button>
    </form>

@endsection
