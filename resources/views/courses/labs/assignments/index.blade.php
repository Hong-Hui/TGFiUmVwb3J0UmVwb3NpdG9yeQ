@extends('layouts.app')

@section('title', 'assignments')

@section('content')

{{-- Assignments.index placeholder --}}

<div class="row">
    <div class="col-12">
        <h2>Assignments of : {{ $lab->title }}
            <span class="text-muted badge badge-warning">Submit before {{ $lab->deadline }}</span>
        </h2>
        <p><a href="{{ route('courses.labs.assignments.create', ['course' => $course, 'lab' => $lab]) }}">New
                Assignment</a></p>
        <p><a href="{{ route('courses.labs.index', ['course' => $course]) }}">Back to labs</a></p>
    </div>
</div>

<hr>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header">

                    <div class="row">
                        <div class="col-4">
                            <b>Name</b>
                        </div>
                        <div class="col-3">
                            <b>Owner</b>
                        </div>
                        <div class="col-2">
                            <b>Submission Date</b>
                        </div>
                        <div class="col-1">
                            <b>Status</b>
                        </div>
                        <div class="col-1">
                            <b>Visibility</b>
                        </div>
                        <div class="col-1">
                            <b>Mark</b>
                        </div>
                    </div>

                </div>

                <div class="card-body">

                    @foreach ($assignments as $assignment)
                    <div class="row">
                        <div class="col-4">
                            <a
                                href="{{ route('courses.labs.assignments.show', ['course' => $course, 'lab' => $lab, 'assignment' => $assignment]) }}">{{ $assignment->title }}</a>
                        </div>
                        <div class="col-3">
                            {{ $assignment->user->name }}
                        </div>
                        <div class="col-2">
                            {{ $assignment->updated_at }}
                        </div>
                        <div class="col-1">
                            {{ $assignment->mark ? 'marked' : 'pending' }}
                        </div>
                        <div class="col-1">
                            {{ $assignment->visibility }}
                        </div>
                        <div class="col-1">
                            {{ $assignment->mark ?? 'pending' }}
                        </div>
                    </div>
                    @endforeach

                    <hr>

                    <div class="row">
                        <div class="col-12 d-flex justify-content-center pt-2">
                            {{ $assignments->links() }}
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>


@endsection
