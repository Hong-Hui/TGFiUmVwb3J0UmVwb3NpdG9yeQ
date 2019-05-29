@extends('layouts.app')

@section('title', 'Create New Lab')

@section('content')

{{-- classes.labs.create placeholder --}}

    <h1>Create New Lab to {{ $classe_id }}</h1>

    {{-- still has to find the correct action --}}
    <form action="/classes/{{ $classe_id }}/labs" method="POST">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" value="{{ old('title') }}" class="form-control">
            <div>{{ $errors->first('title') }}</div>
        </div>

        {{-- classe id has to be the id of the classe in which the lab is created, not a free input --}}
        {{-- <div class="form-group">
            <label for="classe_id">Class Id</label>
            <input type="text" name="classe_id" value="{{ old('classe_id') }}" class="form-control">
            <div>{{ $errors->first('classe_id') }}</div>
        </div> --}}

        {{-- deadline has to be better formatted --}}
        <div class="form-group">
            <label for="deadline">Deadline</label>
            <input type="text" name="deadline" value="{{ old('deadline') }}" class="form-control">
            <div>{{ $errors->first('deadline') }}</div>
        </div>

        <div class="form-group">
            <label for="max_members">Collaboration</label>
            <select name="max_members" id="max_members" class="form-control">
                <option value="" disabled>Max Members</option>
                <option value="1">Individual : 1</option>
                <option value="2">Pair : 2</option>
                <option value="3">Group : 3</option>
            </select>
            <div>{{ $errors->first('max_members') }}</div>
        </div>

        <button type="submit" class="btn btn-primary">Create</button>

        @csrf
    </form>

    @endsection
