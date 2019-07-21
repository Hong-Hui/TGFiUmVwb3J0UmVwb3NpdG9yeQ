@extends('layouts.app')

@section('title', 'student ' . $student->name)

@section('content')

Fancy placeholder

<ul>
@foreach ($student->toArray() as $key => $item)

        <li>{{ $key . ' --> ' .$item }}</li>

@endforeach
</ul>

@endsection
