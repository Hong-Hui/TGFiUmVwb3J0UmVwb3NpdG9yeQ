@extends('layouts.app')

@section('title', 'Students')

@section('content')

<div class="row">
    <div class="col-12">
        <h2>Students Index {{ $course->name }}</h2>
    </div>
</div>

<hr>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header">

                    <div class="row">
                        <div class="col-3">
                            <b>Name</b>
                        </div>
                        <div class="col-3">
                            <b>Contact</b>
                        </div>
                        <div class="col-2">
                            <b>Major</b>
                        </div>
                        <div class="col-2">
                            <b>Level</b>
                        </div>
                        <div class="col-2">
                            <b>Schedule</b>
                        </div>
                    </div>

                </div>

                <div class="card-body">

                    @foreach ($students as $student)
                    <div class="row">
                        <div class="col-3">
                            {{-- Name --}}
                            <a href="{{ route('students.show', ['student' => $student]) }}">{{ $student->name }}</a>
                        </div>
                        <div class="col-3">
                            {{ $student->email }}
                        </div>
                        <div class="col-2">
                            placeholder
                        </div>
                        <div class="col-2">
                            {{-- would be busy or free --}}
                            placeholder
                        </div>
                        <div class="col-2">
                            placeholder
                        </div>
                    </div>
                    @endforeach

                    <hr>

                    <div class="row">
                        <div class="col-12 d-flex justify-content-center pt-2">
                            {{ $students->links() }}
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

@endsection
