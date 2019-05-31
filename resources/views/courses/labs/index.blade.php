@extends('layouts.app')

@section('title', 'labs')

@section('content')

{{-- courses.labs.index placeholder --}}

<div class="row">
    <div class="col-12">
        <h1>Labs of : {{ $localCourse->name }}
            <span class="text-muted">{{ $localCourse->year }}</span>
        </h1>
        <p><a href="labs/create">Create New Lab</a></p>
    </div>
</div>

<div class="row">
    <div class="col-2">
        <b>ID</b>
    </div>
    <div class="col-4">
        Title
    </div>
    <div class="col-4">
        Course {{-- submissions --}}
    </div>
    <div class="col-2">
        Deadline
    </div>
</div>

<hr>

@foreach ($localLabs as $localLab)
    <div class="row">
        <div class="col-2">
            <a href="/courses/{{ $localLab->id }}">{{ $localLab->id }}</a>
        </div>
        <div class="col-4">
            {{ $localLab->title }}
        </div>
        <div class="col-4">
            {{ $localLab->course->name }}
        </div>
        <div class="col-2">
            {{ $localLab->deadline }}
        </div>
    </div>
@endforeach

@endsection

