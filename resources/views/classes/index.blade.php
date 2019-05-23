@extends('layouts.app')

@section('title', 'classes')

@section('content')

{{-- Classes.index placeholder --}}

<p><a href="classes/create">Create a Classe</a></p>

<ul>
    @foreach ($classes as $classe)
        <li>{{ $classe }}</li>
    @endforeach
</ul>

@endsection
