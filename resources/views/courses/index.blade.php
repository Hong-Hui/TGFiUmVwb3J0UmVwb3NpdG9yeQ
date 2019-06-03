@extends('layouts.app')

@section('title', 'courses')

@section('content')

{{-- Courses.index placeholder --}}

<p><a href="courses/create">New Course</a></p>

<div class="row">
    <div class="col-4">
        <h3>Ongoing Courses</h3>
        <ul>
            @foreach ($ongoingCourses as $ongoingCourse)
                <li><a href="courses/{{ $ongoingCourse->id }}/labs">{{ $ongoingCourse->name }}</a>
                    <span class="text-muted">- {{ $ongoingCourse->major }}</span>
                    <span class="text-muted">({{ $ongoingCourse->year }})</span>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="col-4">
        <h3>Completed Courses</h3>
        <ul>
            @foreach ($completedCourses as $completedCourse)
                <li><a href="courses/{{ $completedCourse->id }}">{{ $completedCourse->name }}</a>
                    <span class="text-muted">- {{ $completedCourse->major }}</span>
                    <span class="text-muted">({{ $completedCourse->year}})</span>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="col-4">
        <h3>Archived Courses</h3>
        <ul>
            @foreach ($archivedCourses as $archivedCourse)
                <li><a href="courses/{{ $archivedCourse->id }}">{{ $archivedCourse->name }}</a>
                    <span class="text-muted">- {{ $archivedCourse->major }}</span>
                    <span class="text-muted">({{ $archivedCourse->year }})</span>
                </li>
            @endforeach
        </ul>
    </div>
</div>

@endsection
