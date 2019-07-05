@extends('layouts.app')

@section('title', 'assignment ' . $assignment->title)

@section('content')

<div class="row">
    <div class="col-12">
        <h1>Details for {{ $assignment->title }}</h1>

        <p><a
                href="{{ route('courses.labs.assignments.edit', ['course' => $course, 'lab' => $lab, 'assignment' => $assignment]) }}">Edit</a>
        </p>
        <p><a href="{{ route('courses.labs.assignments.index', ['course' => $course, 'lab' => $lab]) }}">Index</a></p>

        <form
            action="{{ route('courses.labs.assignments.destroy', ['course' => $course, 'lab' => $lab, 'assignment' => $assignment]) }}"
            method="POST">
            @method('DELETE')

            <button type="submit" class="btn btn-danger mb-4">Delete Assignment</button>

            @csrf
        </form>
        <p><a href="/givefile/{{ $assignment->id }}">get file</a></p>
    </div>
</div>

<hr>

<div class="row">
    <div class="col-12">
        <p><strong>Title</strong> {{ $assignment->title }}</p>
        <p><strong>Source File</strong> {{ $assignment->source }}</p>
        <p><strong>Owner</strong> {{ $assignment->user->name }} </p>
        <p><strong>Comments</strong> {{ $assignment->comment ?? 'None' }}</p>
        <p><strong>Mark</strong> {{ $assignment->mark ?? 'pending' }}</p>
        <p><strong>Current Status</strong> {{ $assignment->status }}</p>
        <p><strong>Visibility</strong> {{ $assignment->visibility }}</p>
        <p><strong>Submission Date</strong> {{ $assignment->created_at }}</p>
        <p><strong>Latest Modification</strong> {{ $assignment->updated_at }}</p>
    </div>
</div>

@endsection
