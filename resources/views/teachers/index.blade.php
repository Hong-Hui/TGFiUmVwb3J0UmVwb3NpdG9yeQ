@extends('layouts.app')

@section('title', 'Teachers')

@section('content')

<div class="row">
    <div class="col-12">
        <h2>Teachers Index</h2>
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
                            <b>Specialty</b>
                        </div>
                        <div class="col-2">
                            <b>Contact Status</b>
                        </div>
                        <div class="col-2">
                            <b>Schedule</b>
                        </div>
                    </div>

                </div>

                <div class="card-body">

                    @foreach ($teachers as $teacher)
                    <div class="row">
                        <div class="col-3">
                            {{-- Name --}}
                            <a href="{{ route('teachers.show', ['teacher' => $teacher]) }}">{{ $teacher->name }}</a>
                        </div>
                        <div class="col-3">
                            {{ $teacher->email }}
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

                    <div class="row">
                        <div class="col-12 d-flex justify-content-center pt-2">
                            {{ $teachers->links() }}
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

@endsection
