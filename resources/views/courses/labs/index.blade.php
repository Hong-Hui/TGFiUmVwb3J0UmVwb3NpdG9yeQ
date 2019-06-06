@extends('layouts.app')

@section('title', 'labs')

@section('content')

{{-- courses.labs.index placeholder --}}

<div class="row">
    <div class="col-12">
        <h1>Labs of : {{ $course->name }}
            <span class="text-muted">{{ $course->year }}</span>
        </h1>
        <p><a href="labs/create">New Lab</a></p>
        <p><a href="/courses">Back to Courses</a></p>
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
        Deadline
    </div>
    <div class="col-2">
        Status
    </div>
</div>

<hr>

@foreach ($course->labs as $lab)
    <div class="row">
        <div class="col-4">
            <a href="labs/{{ $lab->id }}/assignments">{{ $lab->title }}</a>
        </div>
        <div class="col-2">
            {{ $lab->assignments->count() }}
        </div>
        <div class="col-4">
            {{ $lab->deadline }}
        </div>
        <div class="col-2">
            {{ $lab->status }}
        </div>
    </div>
@endforeach

@endsection

