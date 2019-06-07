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
        <p><strong>Source File</strong> {{ $assignment->source }}</p>
        <p><strong>Owner</strong> owner placeholder </p>
        <p><strong>Comments</strong> comments placeholder </p>
        <p><strong>Mark</strong> {{ $assignment->mark }}</p>
        <p><strong>Current Status</strong> {{ $assignment->status }}</p>
        <p><strong>Visibility</strong> {{ $assignment->visibility }}</p>
        <p><strong>Submission Date</strong> {{ $assignment->created_at }}</p>
        <p><strong>Latest Modification</strong> {{ $assignment->updated_at }}</p>

    </div>
</div>

@endsection
