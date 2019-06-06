@extends('layouts.app')

@section('title', 'Create New Lab')

@section('content')

{{-- Assignments.create placeholder --}}
{{--
$table->bigIncrements('id');

$table->unsignedBigInteger('lab_id');

$table->string('title');
$table->string('source'); // the source file
$table->smallInteger('mark');

$table->foreign('lab_id')->references('id')->on('labs');

$table->timestamps(); --}}


<h1>Create New Lab for <span class="text-muted">{{ $lab->title }}</h1>

    <form action="/courses/{{ $course->id }}/labs/{{ $lab->id }}/assignments" method="POST" enctype="multipart/form-data">
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
