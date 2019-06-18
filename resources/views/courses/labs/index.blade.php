@extends('layouts.app')

@section('title', 'labs')

@section('content')

{{-- courses.labs.index placeholder --}}

<div class="row">
    <div class="col-12">
        <h1>Labs of : {{ $course->name }}
            <span class="text-muted">{{ $course->year }}</span>
        </h1>
        <p><a href="{{ route('courses.labs.create', ['course' => $course]) }}">New Lab</a></p>
        <p><a href="{{ route('courses.index') }}">Back to Courses</a></p>
    </div>
</div>

<div class="row">
    <div class="col-4">
        <b>Title</b>
    </div>
    <div class="col-2">
        Submissions
    </div>
    <div class="col-4">
        Deadlines
    </div>
    <div class="col-2">
        Status
    </div>
</div>

<hr>

@foreach ($course->labs as $lab)
    <div class="row">
        <div class="col-4">
            <a href="{{ route('courses.labs.assignments.index', ['course' => $course, 'lab' => $lab]) }}">{{ $lab->title }}</a>
            <a href="{{ route('courses.labs.show', ['course' => $course, 'lab' => $lab]) }}"><span class="text-muted">Details</span></a>
        </div>
        <div class="col-2">
            {{ $lab->assignments->count() }}
        </div>
        <div class="col-4">
            {{ $lab->deadline }}
        </div>
        <div class="col-2">
            {{-- will be removed from the database schema in a future release, as it's a dependant result --}}
            {{ $lab->status }}
        </div>
    </div>
@endforeach

<hr>

<a href="#!">students index placeholder</a>

@endsection

