@extends('layouts.app')

@section('title', 'Create Course')

@section('content')

{{-- courses.create placeholder --}}

    <h1>Create Course</h1>

    <form action="{{ route('courses.store') }}" method="POST">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{ old('name') }}" class="form-control">
            <div>{{ $errors->first('name') }}</div>
        </div>

        <div class="form-group">
            <label for="major">Major</label>
            <input type="text" name="major" value="{{ old('major') }}" class="form-control">
            <div>{{ $errors->first('major') }}</div>
        </div>

        <div class="form-group">
            <label for="year">Year</label>
            <input type="text" name="year" value="{{ old('year') }}" class="form-control">
            <div>{{ $errors->first('year') }}</div>
        </div>

        <div class="form-group">
            <label for="section">Section</label>
            <input type="text" name="section" value="{{ old('section') }}" class="form-control">
            <div>{{ $errors->first('section') }}</div>
        </div>

        <div class="form-group">
            <label for="group">Group</label>
            <input type="text" name="group" value="{{ old('group') }}" class="form-control">
            <div>{{ $errors->first('group') }}</div>
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" id="status" class="form-control">
                <option value="" disabled>Class Status</option>
                <option value="ongoing">Ongoing</option>
                <option value="completed">Completed</option>
                <option value="archived">Archived</option>
            </select>
            <div>{{ $errors->first('status') }}</div>
        </div>

        <button type="submit" class="btn btn-primary">Create</button>

        @csrf
    </form>

    @endsection
