@extends('layouts.app')

@section('title', 'lab ' . $lab->title)

@section('content')

<div class="row">
    <div class="col-12">
        <h1>Details for {{ $lab->title }}</h1>

        <a href="{{ route('courses.labs.edit', ['course' => $course, 'lab' => $lab]) }}">Edit</a>

        <form action="{{ route('courses.labs.destroy', ['course' => $course, 'lab' => $lab]) }}" method="POST">
            @method('DELETE')

            <button type="submit" class="btn btn-danger">Delete Lab</button>

            @csrf
        </form>
    </div>
</div>

<hr>

<div class="row">
    <div class="col-12">
        <p><strong>Title</strong> {{ $lab->title }}</p>
        <p><strong>Course</strong> {{ $lab->course->name }}</p>
        <p><strong>Maximum Members Per Group</strong> {{ $lab->max_members }}</p>
        <p><strong>Submit Before</strong> {{ $lab->deadline }}</p>
        <p><strong>Current Status</strong> {{ $lab->status }}</p>
    </div>
</div>

<a href="{{ route('courses.labs.assignments.index', ['course' => $course, 'lab' => $lab]) }}">assignments</a>

@endsection
