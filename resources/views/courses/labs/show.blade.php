@extends('layouts.app')

@section('title', 'lab ' . $lab->title)

@section('content')

<div class="row">
    <div class="col-12">
        <h1>Details for {{ $lab->title }}</h1>
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

<a href="/courses/{{ $lab->course_id }}/labs/{{ $lab->id }}/assignments">assignments</a>

@endsection
