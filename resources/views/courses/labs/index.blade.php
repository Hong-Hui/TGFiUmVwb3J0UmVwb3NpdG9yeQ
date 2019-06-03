@extends('layouts.app')

@section('title', 'labs')

@section('content')

{{-- courses.labs.index placeholder --}}

<div class="row">
    <div class="col-12">
        <h1>Labs of : {{ $localCourse->name }}
            <span class="text-muted">{{ $localCourse->year }}</span>
        </h1>
        <p><a href="labs/create">New Lab</a></p>
        <p><a href="/courses">Back to Courses</a></p>
    </div>
</div>

<div class="row">
    <div class="col-3">
        <b>Title</b>
    </div>
    <div class="col-3">
        Submissions
    </div>
    <div class="col-3">
        Deadline
    </div>
    <div class="col-3">
        Status
    </div>
</div>

<hr>

@foreach ($localLabs as $localLab)
    <div class="row">
        <div class="col-4">
            <a href="labs/{{ $localLab->id }}/assignments">{{ $localLab->title }}</a>
        </div>
        <div class="col-2">
            {{ $localLab->assignments->count() }}
        </div>
        <div class="col-4">
            {{ $localLab->deadline }}
        </div>
        <div class="col-2">
            {{ $localLab->status }}
        </div>
    </div>
@endforeach

@endsection

