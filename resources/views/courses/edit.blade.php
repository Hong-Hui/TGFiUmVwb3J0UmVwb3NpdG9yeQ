@extends('layouts.card')

@section('card_header')

<h4>Edit Course <span class="text-muted">{{ $course->name }}</span></h4>

@endsection

@section('card_body')

<form action="{{ route('courses.update', ['course' => $course]) }}" method="POST">
    @method('PATCH')

    @include('courses.form')

    <div class="form-group row">
        <label for="status" class="col-md-2 col-form-label text-md-right">Status</label>

        <div class="col-md-8">
            <select name="status" id="status" class="form-control">
                <option value="" disabled>Status</option>
                <option value="ongoig">Ongoing</option>
                <option value="completed">Completed</option>
                <option value="archived">Archived</option>
            </select>
            <div>{{ $errors->first('status') }}</div>
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-2 offset-md-2">
            <button type="submit" class="btn btn-warning">Save</button>
        </div>
    </div>
</form>

@endsection
