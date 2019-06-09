@extends('layouts.app')

@section('title', 'course ' . $course->name)

@section('content')

<div class="row">
    <div class="col-12">
        <h1>Details for {{ $course->name }}</h1>

        <a href="{{ route('courses.edit', ['course' => $course]) }}">Edit</a>

        <form action="{{ route('courses.destroy', ['course' => $course]) }}" method="POST">
            @method('DELETE')

            <button type="submit" class="btn btn-danger">Delete Course</button>

            @csrf
        </form>
    </div>
</div>

<hr>

<div class="row">
    <div class="col-12">
        <p><strong>Name</strong> {{ $course->name }}</p>
        <p><strong>Major</strong> {{ $course->major }}</p>
        <p><strong>Year</strong> {{ $course->year }}</p>
        <p><strong>Section</strong> {{ $course->section }}</p>
        <p><strong>Group</strong> {{ $course->group }}</p>
        <p><strong>Status</strong> {{ $course->status }}</p>
    </div>
</div>

<a href="{{ route('courses.labs.index', ['course' => $course]) }}">labs</a>

@endsection