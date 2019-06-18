@extends('layouts.app')

@section('title', 'courses')

@section('content')

{{-- Courses.index placeholder --}}

{{-- a refactor is needed where the courses are sorted by major or year --}}

<p><a href="{{ route('courses.create') }}">New Course</a></p>

<div class="row">
    <div class="col-4">
        <h3>Ongoing Courses</h3>
        <ul>
            @foreach ($ongoingCourses as $ongoingCourse)
                <li><a href="{{ route('courses.labs.index', ['course' => $ongoingCourse]) }}">{{ $ongoingCourse->name }}</a>
                    <span class="text-muted">- {{ $ongoingCourse->major }}</span>
                    <span class="text-muted">({{ $ongoingCourse->year }})</span>
                    <a href="{{ route('courses.show', ['course' => $ongoingCourse]) }}">Details</a>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="col-4">
        <h3>Completed Courses</h3>
        <ul>
            @foreach ($completedCourses as $completedCourse)
                <li><a href="{{ route('courses.labs.index', ['course' => $completedCourse]) }}">{{ $completedCourse->name }}</a>
                    <span class="text-muted">- {{ $completedCourse->major }}</span>
                    <span class="text-muted">({{ $completedCourse->year}})</span>
                    <a href="{{ route('courses.show', ['course' => $completedCourse]) }}">Details</a>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="col-4">
        <h3>Archived Courses</h3>
        <ul>
            @foreach ($archivedCourses as $archivedCourse)
                <li><a href="{{ route('courses.labs.index', ['course' => $archivedCourse]) }}">{{ $archivedCourse->name }}</a>
                    <span class="text-muted">- {{ $archivedCourse->major }}</span>
                    <span class="text-muted">({{ $archivedCourse->year }})</span>
                    <a href="{{ route('courses.show', ['course' => $archivedCourse]) }}">Details</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>

<hr>

{{-- course references suggestion --}}
{{-- add books or documents as a reference --}}
@endsection
