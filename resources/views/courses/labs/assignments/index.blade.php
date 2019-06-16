@extends('layouts.app')

@section('title', 'assignments')

@section('content')

{{-- Assignments.index placeholder --}}

    <div class="row">
        <div class="col-12">
            <h1>Assignments of : {{ $lab->title }}
                <span class="text-muted badge badge-warning">Submit before {{ $lab->deadline }}</span>
            </h1>
            <p><a href="{{ route('courses.labs.assignments.create', ['course' => $course, 'lab' => $lab]) }}">New Assignment</a></p>
            <p><a href="{{ route('courses.labs.index', ['course' => $course]) }}">Back to labs</a></p>
        </div>
    </div>

    <div class="row">
        <div class="col-4">Name</div>
        <div class="col-3">Owner</div>
        <div class="col-2">Submission Date</div>
        <div class="col-1">Status</div>
        <div class="col-1">Visibility</div>
        <div class="col-1">Mark</div>
    </div>

    <hr>

    @foreach ($lab->assignments as $assignment)
        <div class="row">
            <div class="col-4">
                <a href="{{ route('courses.labs.assignments.show', ['course' => $course, 'lab' => $lab, 'assignment' => $assignment]) }}">{{ $assignment->title }}</a>
                <a href="{{ route('courses.labs.assignments.show', ['course' => $course, 'lab' => $lab, 'assignment' => $assignment]) }}"><span class="text-muted">Details</span></a>
            </div>
            <div class="col-3">
                {{ $assignment->user->name }}
            </div>
            <div class="col-2">
                {{ $assignment->updated_at }}
            </div>
            <div class="col-1">
                {{ $assignment->status }}
            </div>
            <div class="col-1">
                {{ $assignment->visibility }}
            </div>
            <div classe="col-1">
                {{ $assignment->mark }}
            </div>
        </div>
    @endforeach

@endsection
