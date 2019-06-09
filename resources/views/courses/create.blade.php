@extends('layouts.app')

@section('title', 'Create Course')

@section('content')

{{-- courses.create placeholder --}}

    <h1>Create Course</h1>

    <form action="{{ route('courses.store') }}" method="POST">
        @include('courses.form')

        <button type="submit" class="btn btn-primary">Create</button>
    </form>

@endsection
