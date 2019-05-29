@extends('layouts.app')

@section('title', 'Create Classe')

@section('content')

{{-- classes.create placeholder --}}

    <h1>Create Classe</h1>

    <form action="/classes" method="POST">
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
            <label for="semester">Semester</label>
            <input type="text" name="semester" value="{{ old('semester') }}" class="form-control">
            <div>{{ $errors->first('semester') }}</div>
        </div>

        <div class="form-group">
            <label for="number">Number</label>
            <input type="text" name="number" value="{{ old('number') }}" class="form-control">
            <div>{{ $errors->first('number') }}</div>
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" id="status" class="form-control">
                <option value="" disabled>Class Status</option>
                <option value="ongoing">Ongoing</option>
                <option value="ended">Ended</option>
                <option value="archived">Archived</option>
            </select>
            <div>{{ $errors->first('status') }}</div>
        </div>

        <button type="submit" class="btn btn-primary">Create</button>

        @csrf
    </form>

    @endsection
