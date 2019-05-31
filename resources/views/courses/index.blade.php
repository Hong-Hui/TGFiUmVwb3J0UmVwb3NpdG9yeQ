@extends('layouts.app')

@section('title', 'courses')

@section('content')

{{-- Courses.index placeholder --}}

<p><a href="courses/create">Create a Course</a></p>

<div class="row">
    <div class="col-4">
        <h3>Ongoing Courses</h3>
        <ul>
            @foreach ($ongoingCourses as $ongoingCourse)
                <li>{{ $ongoingCourse->name }}
                    <span class="text-muted">- {{ $ongoingCourse->major }}</span>
                    <span class="text-muted">({{ $ongoingCourse->year }})</span>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="col-4">
        <h3>Ended Courses</h3>
        <ul>
            @foreach ($endedCourses as $endedCourse)
                <li>{{ $endedCourse->name }}
                    <span class="text-muted">- {{ $endedCourse->major }}</span>
                    <span class="text-muted">({{ $endedCourse->year}})</span>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="col-4">
        <h3>Archived Courses</h3>
        <ul>
            @foreach ($archivedCourses as $archivedCourse)
                <li>{{ $archivedCourse->name }}
                    <span class="text-muted">- {{ $archivedCourse->major }}</span>
                    <span class="text-muted">({{ $archivedCourse->year }})</span>
                </li>
            @endforeach
        </ul>
    </div>
</div>


@endsection
