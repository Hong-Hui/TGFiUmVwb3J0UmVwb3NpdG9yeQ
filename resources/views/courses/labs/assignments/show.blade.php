@extends('layouts.app')

@section('title', 'assignment ' . $assignment->title)

@section('content')

<div class="row">
    <div class="col-12">
        <h1>Details for {{ $assignment->title }}</h1>
    </div>
</div>

<hr>

<div class="row">
    <div class="col-12">
        <p><strong>Title</strong> {{ $assignment->title }}</p>
        <p><strong>Source</strong> {{ $assignment->source }}</p>
        <p><strong>Mark</strong> {{ $assignment->mark }}</p>
        <p><strong>Current Status</strong> {{ $assignment->status }}</p>
        <p><strong>Visibility</strong> {{ $assignment->visibility }}</p>
    </div>
</div>

@endsection
