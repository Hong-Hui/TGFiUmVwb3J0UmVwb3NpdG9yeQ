@extends('layouts.app')

@section('title', 'edit lab ' . $lab->title)

@section('content')

{{-- courses.labs.edit placeholder --}}

    <h1>Edit Lab <span class="text-muted">{{ $lab->title }}</span></h1>

    <form action="{{ route('courses.labs.update', ['course' => $course, 'lab' => $lab]) }}" method="POST">
        @method('PATCH')

        @include('courses.labs.form')

        <button type="submit" class="btn btn-warning">Save</button>
    </form>

@endsection
