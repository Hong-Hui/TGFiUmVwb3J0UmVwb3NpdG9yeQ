@extends('layouts.app')

@section('title', 'Create New Lab')

@section('content')

{{-- Assignments.create placeholder --}}

<h1>Create New Lab for <span class="text-muted">{{ $lab->title }}</h1>

    <form action="{{ route('courses.labs.assignments.store', ['course' => $course, 'lab' => $lab]) }}" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" value="{{ old('title') }}" class="form-control">
            <div>{{ $errors->first('title') }}</div>
        </div>

        <div class="form-group">
            <label for="source">Source</label>
            <input type="file" name="source">
            <div>{{ $errors->first('source') }}</div>
        </div>

        <div class="form-group">
            <label for="visibility">Visibility</label>
            <select name="visibility" id="visibility" class="form-control">
                <option value="" disabled>Visibility</option>
                <option value="private">Private</option>
                <option value="public">Public</option>
            </select>
            <div>{{ $errors->first('visibility') }}</div>
        </div>

        <button type="submit" class="btn btn-primary">Create</button>

        @csrf
    </form>

@endsection
