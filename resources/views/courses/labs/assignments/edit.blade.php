@extends('layouts.app')

@section('title', 'edit assignment ' . $assignment->title)

@section('content')

{{-- courses.labs.assignments.edit placeholder --}}

    <h1>Edit Assignment <span class="text-muted">{{ $assignment->title }}</span></h1>

    <form action="{{ route('courses.labs.assignments.update', ['course' => $course, 'lab' => $lab, 'assignment' => $assignment]) }}" method="POST" enctype="multipart/form-data">
        @method('PATCH')

        @include('courses.labs.assignments.form')

        <div class="form-group">
            <label for="mark">Mark</label>
            <input type="text" name="mark" class="form-control" value="{{ old('mark') ?? $assignment->mark }}">
            <div>{{ $errors->first('mark') }}</div>
        </div>

        <div class="form-group">
            <label for="comment">Comment</label>
            <textarea name="comment" id="comment" cols="30" rows="10" class="form-control">{{ old('comment') ?? $assignment->comment }}</textarea>
            <div>{{ $errors->first('comment') }}</div>
        </div>

        <button type="submit" class="btn btn-warning">Save</button>
    </form>

@endsection
