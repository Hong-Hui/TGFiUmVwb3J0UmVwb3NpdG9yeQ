@extends('layouts.app')

@section('title', 'assignments')

@section('content')

{{-- Assignments.index placeholder --}}

    <div class="row">
        <div class="col-12">
            <h1>Assignments of : {{ $localLab->title }}
                <span class="text-muted badge badge-warning">Submit before {{ $localLab->deadline }}</span>
            </h1>
            <p><a href="assignments/create">New Assignment</a></p>
        </div>
    </div>

    <div class="row">
        <div class="col-3">Name</div>
        <div class="col-3">Owner</div>
        <div class="col-3">Submission Date</div>
        <div class="col-1">Status</div>
        <div class="col-2">Mark</div>
    </div>

    <hr>

    @foreach ($localAssignments as $localAssignment)
        <div class="row">
            <div class="col-3">
                <a href="assignments/{{ $localAssignment->id }}">{{ $localAssignment->title }}</a>
            </div>
            <div class="col-3">
                {{-- to be implimented later --}}
                owner placeholder
            </div>
            <div class="col-3">
                {{ $localAssignment->updated_at }}
            </div>
            <div class="col-1">
                {{ $localAssignment->status }} {{-- {{ $localAssignment->status }} --}}
            </div>
            <div classe="col-2">
                {{ $localAssignment->mark }}
            </div>
        </div>
    @endforeach

@endsection
