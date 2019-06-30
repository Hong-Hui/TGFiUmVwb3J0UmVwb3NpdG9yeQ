@extends('layouts.app')

@section('title', 'edit assignment ' . $assignment->title)

@section('content')

{{-- courses.labs.assignments.edit placeholder --}}


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">

                    <h4>Edit Assignment <span class="badge">{{ $assignment->title }}</span></h4>

                </div>

                <div class="card-body">

                    <form
                        action="{{ route('courses.labs.assignments.update', ['course' => $course, 'lab' => $lab, 'assignment' => $assignment]) }}"
                        method="POST" enctype="multipart/form-data">
                        @method('PATCH')

                        @include('courses.labs.assignments.form')

                        <div class="form-group row">
                            <label for="mark" class="col-md-2 col-form-label text-md-right">Mark</label>

                            <div class="col-md-8">
                                <input type="text" name="mark" class="form-control"
                                    value="{{ old('mark') ?? $assignment->mark }}">
                                <div>{{ $errors->first('mark') }}</div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="comment" class="col-md-2 col-form-label text-md-right">Comment</label>

                            <div class="col-md-8">
                                <textarea name="comment" id="comment" cols="30" rows="10"
                                    class="form-control">{{ old('comment') ?? $assignment->comment }}</textarea>
                                <div>{{ $errors->first('comment') }}</div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-2 offset-md-2">
                                <button type="submit" class="btn btn-warning">Save</button>
                            </div>
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>
</div>

@endsection
