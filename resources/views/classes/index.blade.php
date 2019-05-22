@extends('layouts.app')

@section('title', 'classes')

@section('content')

{{-- Classes.index placeholder --}}
<ul>
    @foreach ($classes as $classe)
        <li>{{ $classe }}</li>
    @endforeach
</ul>

@endsection
