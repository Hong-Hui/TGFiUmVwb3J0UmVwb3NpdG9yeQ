@extends('layouts.app')

@section('title', 'assignments')

@section('content')

{{-- Assignments.index placeholder --}}

    <div class="row">
        <div class="col-12">
            <h1>Assignments of : {{ $lab->title }}
                <span class="text-muted badge badge-warning">Submit before {{ $lab->deadline }}</span>
            </h1>
            <p><a href="assignments/create">New Assignment</a></p>
            <p><a href="/courses/{{ $lab->course_id }}/labs">Back to labs</a></p>
        </div>
    </div>

    <div class="row">
        <div class="col-3">Name</div>
        <div class="col-3">Owner</div>
        <div class="col-3">Submission Date</div>
        <div class="col-1">Status</div>
        <div class="col-1">Visibility</div>
        <div class="col-1">Mark</div>
    </div>

    <hr>

    @foreach ($lab->assignments as $assignment)
        <div class="row">
            <div class="col-3">
                <a href="assignments/{{ $assignment->id }}">{{ $assignment->title }}</a>
                <a href="assignments/{{ $assignment->id }}"><span class="text-muted">Details</span></a>
            </div>
            <div class="col-3">
                {{-- to be implimented later --}}
                owner placeholder
            </div>
            <div class="col-3">
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
