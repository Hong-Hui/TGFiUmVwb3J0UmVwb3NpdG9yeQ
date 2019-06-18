@extends('layouts.app')

@section('title', 'Students')

@section('content')

Students.index placeholder

<ul>
    @foreach ($students as $student)
        <li>{{ $student->name }}</li>
    @endforeach
</ul>

@endsection
